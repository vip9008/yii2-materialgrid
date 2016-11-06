<?php

namespace vip9008\materialgrid\widgets;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use vip9008\materialgrid\assets\AdminAsset;

class AdminSubmenu extends \yii\base\Widget
{
    public $options = [];
    public $items = [];
    public $encodeLabels = true;

    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, ['sub-menu']);
    }

    public function run()
    {
        AdminAsset::register($this->getView());
        return $this->renderItems($this->items, $this->options);
    }

    protected function renderItems($items, $options = [])
    {
        $lines = [];
        foreach ($items as $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }

            if (is_string($item)) {
                $lines[] = $item;
                continue;
            }

            if (!array_key_exists('label', $item)) {
                throw new InvalidConfigException("The 'label' option is required.");
            }

            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];

            $linkOptions = ArrayHelper::getValue($item, 'options', []);
            // $linkOptions['tabindex'] = '-1';

            $url = array_key_exists('url', $item) ? $item['url'] : null;

            $lines[] = Html::a($label, $url, $linkOptions);
        }

        return Html::tag('div', implode("\n", $lines), $options);
    }
}
