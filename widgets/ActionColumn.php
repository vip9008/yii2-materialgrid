<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\helpers\Html;
use yii\grid\ActionColumn as BaseActionColumn;

class ActionColumn extends BaseActionColumn
{
    public $template = '{view} {update} {delete}';
    public $buttonOptions = ['class' => 'material-icons'];
    public $containerOptions = ['class' => 'controls'];

    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('view_list', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('edit', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('delete', $url, $options);
            };
        }
    }

    public function renderDataCell($model, $key, $index)
    {
        if ($this->contentOptions instanceof Closure) {
            $options = call_user_func($this->contentOptions, $model, $key, $index, $this);
        } else {
            $options = $this->contentOptions;
        }
        return Html::tag('td', Html::tag('div', $this->renderDataCellContent($model, $key, $index), $this->containerOptions), $options);
    }

    public function renderHeaderCell()
    {
        return Html::tag('th', Html::tag('div', $this->renderHeaderCellContent(), $this->containerOptions), $this->headerOptions);
    }

    public function renderFooterCell()
    {
        return Html::tag('td', Html::tag('div', $this->renderFooterCellContent(), $this->containerOptions), $this->footerOptions);
    }
}