<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use vip9008\materialgrid\assets\AdminAsset;

/**
 * Nav renders a nav HTML component.
 *
 * For example:
 *
 * ```php
 * echo Nav::widget([
 *     'items' => [
 *         [
 *             'label' => 'Home',
 *             'url' => ['site/index'],
 *             'linkOptions' => [...],
 *         ],
 *         [
 *             'label' => 'Dropdown',
 *             'items' => [
 *                  ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
 *                  '<li class="divider"></li>',
 *                  '<li class="dropdown-header">Dropdown Header</li>',
 *                  ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
 *             ],
 *         ],
 *         [
 *             'label' => 'Login',
 *             'url' => ['site/login'],
 *             'visible' => Yii::$app->user->isGuest
 *         ],
 *     ],
 *     'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
 * ]);
 * ```
 *
 * Note: Multilevel dropdowns beyond Level 1 are not supported.
 */
class AdminNav extends \yii\base\Widget
{
    public $options = [];
    public $items = [];
    public $encodeLabels = true;
    public $activateItems = true;
    public $activateParents = true;
    public $route;
    public $params;
    public $themeColor = 'indigo';

    public function init()
    {
        parent::init();
        if ($this->route === null && Yii::$app->controller !== null) {
            $this->route = Yii::$app->controller->getRoute();
        }
        if ($this->params === null) {
            $this->params = Yii::$app->request->getQueryParams();
        }

        Html::addCssClass($this->options, ['list', $this->themeColor]);
    }

    public function run()
    {
        AdminAsset::register($this->getView());
        return $this->renderItems();
    }

    public function renderItems()
    {
        $items = [];

        $items[] = Html::beginTag('div', ['class' => 'list-group']);

        foreach ($this->items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }

            if (ArrayHelper::getValue($item, 'subheader', false)) {
                $items[] = Html::endTag('div');
                $items[] = Html::beginTag('div', ['class' => 'list-group']);
            }

            $items[] = $this->renderItem($item);
        }

        $items[] = Html::endTag('div');

        return Html::tag('div', implode("\n", $items), $this->options);
    }

    public function renderItem($item)
    {
        if (is_string($item)) {
            return $item;
        }

        if (ArrayHelper::getValue($item, 'subheader', false)) {
            $class = ArrayHelper::getValue($item, 'class', '');
            return Html::tag('div', $item['subheader'], ['class' => "subheader $class"]);
        }

        if (!ArrayHelper::getValue($item, 'label', false) && !ArrayHelper::getValue($item, 'subheader', false)) {
            throw new InvalidConfigException("No 'label' or 'subheader' option could be found.");
        }

        $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
        $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
        $label = Html::tag(
            'div',
            Html::tag('div', $label, ['class' => 'title']),
            ['class' => 'text']
        );

        $icon = ArrayHelper::getValue($item, 'icon', '');

        if (!empty($icon)) {
            $label = Html::tag(
                'div',
                Html::tag('div', $icon, ['class' => 'material-icon']),
                ['class' => 'icon text-secondary']
            ) . $label;
        }

        $options = ArrayHelper::getValue($item, 'options', []);
        $items = ArrayHelper::getValue($item, 'items');
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);

        if (isset($item['active'])) {
            $active = ArrayHelper::remove($item, 'active', false);
        } else {
            $active = $this->isItemActive($item);
        }

        if (empty($items)) {
            $items = '';
        } else {
            if (is_array($items)) {
                if ($this->activateItems) {
                    $items = $this->isChildActive($items, $active);
                }
                $items = $this->renderDropdown($items, $item);
                Html::addCssClass($linkOptions, ['dropdown']);
            }
        }

        Html::addCssClass($options, ['list-item', 'one-line']);
        if ($this->activateItems && $active) {
            Html::addCssClass($options, 'current');
        }

        Html::addCssClass($linkOptions, ['text-primary']);

        return Html::tag('div', Html::a($label, $url, $linkOptions) . $items, $options);
    }

    protected function renderDropdown($items, $parentItem)
    {
        return AdminSubmenu::widget([
            'options' => ArrayHelper::getValue($parentItem, 'subMenuOptions', []),
            'items' => $items,
            'encodeLabels' => $this->encodeLabels,
            'view' => $this->getView(),
        ]);
    }

    protected function isChildActive($items, &$active)
    {
        foreach ($items as $i => $child) {
            if (ArrayHelper::remove($items[$i], 'active', false) || $this->isItemActive($child)) {
                Html::addCssClass($items[$i]['options'], 'active');
                if ($this->activateParents) {
                    $active = true;
                }
            }
        }
        return $items;
    }

    protected function isItemActive($item)
    {
        if (isset($item['url']) && is_array($item['url']) && isset($item['url'][0])) {
            $route = $item['url'][0];
            if ($route[0] !== '/' && Yii::$app->controller) {
                $route = Yii::$app->controller->module->getUniqueId() . '/' . $route;
            }
            $trimmed = substr($this->route, 0, strrpos($this->route, '/'));
            if (ltrim($route, '/') !== $this->route && ltrim($route, '/') !== $trimmed) {
                return false;
            }
            unset($item['url']['#']);
            if (count($item['url']) > 1) {
                $params = $item['url'];
                unset($params[0]);
                foreach ($params as $name => $value) {
                    if ($value !== null && (!isset($this->params[$name]) || $this->params[$name] != $value)) {
                        return false;
                    }
                }
            }

            return true;
        }

        return false;
    }
}
