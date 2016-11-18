<?php

namespace vip9008\materialgrid\widgets;

use yii\base\InvalidCallException;
use yii\helpers\Json;
use vip9008\materialgrid\helpers\Html;
use yii\widgets\ActiveForm as BaseActiveForm;

class ActiveForm extends BaseActiveForm
{
    public $options = [];
    public $themeColor = '';
    public $fieldClass = 'vip9008\materialgrid\widgets\ActiveField';

    public function init()
    {
        if (isset($this->options['themeColor'])) {
            $this->options['themeColor'] = $this->themeColor;
            unset($this->options['themeColor']);
        }

        parent::init();
    }

    public function run()
    {
        if (!empty($this->_fields)) {
            throw new InvalidCallException('Each beginField() should have a matching endField() call.');
        }

        $content = ob_get_clean();
        echo Html::beginForm($this->action, $this->method, $this->options);
        echo $content;

        if ($this->enableClientScript) {
            $id = $this->options['id'];
            $options = Json::htmlEncode($this->getClientOptions());
            $attributes = Json::htmlEncode($this->attributes);
            $view = $this->getView();
            ActiveFormAsset::register($view);
            $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
        }

        echo Html::endForm();
    }

    public function field($model, $attribute, $options = [])
    {
        if (!isset($options['themeColor'])) {
            $options['themeColor'] = $this->themeColor;
        }
        
        return parent::field($model, $attribute, $options);
    }
}
