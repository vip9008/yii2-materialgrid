<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\base\ErrorHandler;
use yii\helpers\ArrayHelper;
use vip9008\materialgrid\helpers\Html;
use yii\base\Model;
use yii\web\JsExpression;
use yii\widgets\ActiveField as BaseActiveField;

class ActiveField extends BaseActiveField
{
    public $options = [];
    public $role = ['name' => '', 'type' => ''];
    public $themeColor = '';
    public $template = "{input}\n{label}\n{hint}\n{error}";
    public $inputOptions = [];
    public $errorOptions = ['class' => 'help-block'];
    public $labelOptions = [];
    public $hintOptions = ['class' => 'hint-block'];

    public function begin()
    {
        if ($this->form->enableClientScript) {
            $clientOptions = $this->getClientOptions();
            if (!empty($clientOptions)) {
                $this->form->attributes[] = $clientOptions;
            }
        }

        $inputID = $this->getInputId();
        $attribute = Html::getAttributeName($this->attribute);
        $options = $this->options;
        $class = isset($options['class']) ? [$options['class']] : [];
        $class[] = "field-$inputID";
        if ($this->model->isAttributeRequired($attribute)) {
            $class[] = $this->form->requiredCssClass;
        }
        if ($this->model->hasErrors($attribute)) {
            $class[] = $this->form->errorCssClass;
        }
        $class[] = $this->themeColor;
        $options['class'] = implode(' ', $class);
        $tag = ArrayHelper::remove($options, 'tag', 'div');

        return Html::beginTag($tag, $options);
    }

    public function label($label = null, $options = [])
    {
        if ($label === false) {
            $this->parts['{label}'] = '';
            return $this;
        }

        $options = array_merge($this->labelOptions, $options);
        Html::addCssClass($options, 'label');

        if ($label === null) {
            $label = $this->model->getAttributeLabel($this->attribute);
        }

        $this->parts['{label}'] = Html::tag('div', $label, $options);

        switch ($this->role['name']) {
            case 'select':
                $textOptions = [
                    'type' => 'text',
                    'class' => 'text-input',
                    'value' => ArrayHelper::remove($options, 'textValue', ''),
                ];

                if (ArrayHelper::getValue($this->options, 'placeholder', false)) {
                    $textOptions['placeholder'] = ArrayHelper::remove($this->options, 'placeholder', '');
                }

                if ($this->role['type'] != 'bar-menu') {
                    $textOptions['disabled'] = true;
                }

                $this->parts['{label}'] = Html::tag('div', 'arrow_drop_down', ['class' => 'material-icon side-action text-secondary']).
                    Html::tag('input', '', $textOptions).
                    $this->parts['{label}'];
            break;
            case 'date-picker':
                $textOptions = [
                    'type' => 'text',
                    'class' => 'text-input',
                    'disabled' => true,
                    'value' => ArrayHelper::remove($options, 'textValue', ''),
                ];

                if (ArrayHelper::getValue($this->options, 'placeholder', false)) {
                    $textOptions['placeholder'] = ArrayHelper::remove($this->options, 'placeholder', '');
                }

                $this->parts['{label}'] = Html::tag('div', 'date_range', ['class' => 'material-icon side-action text-secondary']).
                    Html::tag('input', '', $textOptions).
                    $this->parts['{label}'];
            break;
        }

        return $this;
    }

    public function textInput($options = [])
    {
        Html::addCssClass($this->options, 'form-input');
        $options = array_merge($this->inputOptions, $options);
        Html::addCssClass($options, 'text-input');
        $this->parts['{input}'] = Html::activeTextInput($this->model, $this->attribute, $options);

        return $this;
    }
    
    public function textarea($options = [])
    {
        Html::addCssClass($this->options, 'form-input');
        $options = array_merge($this->inputOptions, $options);
        Html::addCssClass($options, 'text-input');
        $this->parts['{input}'] = Html::activeTextarea($this->model, $this->attribute, $options);

        return $this;
    }

    public function hiddenInput($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->parts['{input}'] = Html::activeHiddenInput($this->model, $this->attribute, $options);

        return $this;
    }

    public function passwordInput($options = [])
    {
        Html::addCssClass($this->options, 'form-input');
        $options = array_merge($this->inputOptions, $options);
        Html::addCssClass($options, 'text-input');
        $this->parts['{input}'] = Html::activePasswordInput($this->model, $this->attribute, $options);

        return $this;
    }

    public function fileInput($options = [])
    {
        // https://github.com/yiisoft/yii2/pull/795
        if ($this->inputOptions !== ['class' => 'form-control']) {
            $options = array_merge($this->inputOptions, $options);
        }
        // https://github.com/yiisoft/yii2/issues/8779
        if (!isset($this->form->options['enctype'])) {
            $this->form->options['enctype'] = 'multipart/form-data';
        }
        $this->parts['{input}'] = Html::activeFileInput($this->model, $this->attribute, $options);

        return $this;
    }

    public function radio($options = [], $enclosedByLabel = true)
    {
        if ($enclosedByLabel) {
            $this->parts['{input}'] = Html::activeRadio($this->model, $this->attribute, $options);
            $this->parts['{label}'] = '';
        } else {
            if (isset($options['label']) && !isset($this->parts['{label}'])) {
                $this->parts['{label}'] = $options['label'];
                if (!empty($options['labelOptions'])) {
                    $this->labelOptions = $options['labelOptions'];
                }
            }
            unset($options['labelOptions']);
            $options['label'] = null;
            $this->parts['{input}'] = Html::activeRadio($this->model, $this->attribute, $options);
        }

        return $this;
    }

    public function checkbox($options = [], $enclosedByLabel = true)
    {
        $this->template = "{input}";
        Html::addCssClass($this->options, 'checkbox-input');
        $options = array_merge($this->inputOptions, $options);
        $this->parts['{input}'] = Html::activeCheckbox($this->model, $this->attribute, $options);

        return $this;
    }

    public function dropDownList($items, $options = [])
    {
        $this->role['name'] = 'select';
        $this->role['type'] = ArrayHelper::remove($options, 'type', '');

        Html::addCssClass($this->options, "form-input select-control {$this->role['type']}");

        $options = array_merge($this->inputOptions, $options);

        if ($this->role['type'] == 'bar-menu') {
            $options['errorMessage'] = ArrayHelper::getValue($options, 'errorMessage', "Can't find any match!");
        }

        $selection = isset($options['value']) ? $options['value'] : Html::getAttributeValue($this->model, $this->attribute);
        if ($selection !== null && isset($items[$selection])) {
            $this->labelOptions['textValue'] = $items[$selection];
        }

        $this->parts['{input}'] = Html::activeDropDownList($this->model, $this->attribute, $items, $options);
        
        return $this;
    }

    public function datePicker($options = [])
    {
        $this->role['name'] = 'date-picker';

        Html::addCssClass($this->options, "form-input date-picker");

        $options = array_merge($this->inputOptions, $options);

        if (!array_key_exists('id', $options)) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }

        $options['datepicker-id'] = $options['id']."-datepicker";
        $this->options['data-target'] = "#".$options['datepicker-id'];

        $selection = isset($options['value']) ? $options['value'] : Html::getAttributeValue($this->model, $this->attribute);
        if ($selection !== null) {
            $this->labelOptions['textValue'] = $selection;
        }

        $options['themeColor'] = $this->themeColor;

        $this->parts['{input}'] = Html::activeDatePicker($this->model, $this->attribute, $options);
        
        return $this;
    }

    /**
     * Renders a list box.
     * The selection of the list box is taken from the value of the model attribute.
     * @param array $items the option data items. The array keys are option values, and the array values
     * are the corresponding option labels. The array can also be nested (i.e. some array values are arrays too).
     * For each sub-array, an option group will be generated whose label is the key associated with the sub-array.
     * If you have a list of data models, you may convert them into the format described above using
     * [[\yii\helpers\ArrayHelper::map()]].
     *
     * Note, the values and labels will be automatically HTML-encoded by this method, and the blank spaces in
     * the labels will also be HTML-encoded.
     * @param array $options the tag options in terms of name-value pairs.
     *
     * For the list of available options please refer to the `$options` parameter of [[\yii\helpers\Html::activeListBox()]].
     *
     * If you set a custom `id` for the input element, you may need to adjust the [[$selectors]] accordingly.
     *
     * @return $this the field object itself.
     */
    public function listBox($items, $options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->parts['{input}'] = Html::activeListBox($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * Renders a list of checkboxes.
     * A checkbox list allows multiple selection, like [[listBox()]].
     * As a result, the corresponding submitted value is an array.
     * The selection of the checkbox list is taken from the value of the model attribute.
     * @param array $items the data item used to generate the checkboxes.
     * The array values are the labels, while the array keys are the corresponding checkbox values.
     * @param array $options options (name => config) for the checkbox list.
     * For the list of available options please refer to the `$options` parameter of [[\yii\helpers\Html::activeCheckboxList()]].
     * @return $this the field object itself.
     */
    public function checkboxList($items, $options = [])
    {
        $this->_skipLabelFor = true;
        $this->parts['{input}'] = Html::activeCheckboxList($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * Renders a list of radio buttons.
     * A radio button list is like a checkbox list, except that it only allows single selection.
     * The selection of the radio buttons is taken from the value of the model attribute.
     * @param array $items the data item used to generate the radio buttons.
     * The array values are the labels, while the array keys are the corresponding radio values.
     * @param array $options options (name => config) for the radio button list.
     * For the list of available options please refer to the `$options` parameter of [[\yii\helpers\Html::activeRadioList()]].
     * @return $this the field object itself.
     */
    public function radioList($items, $options = [])
    {
        $this->_skipLabelFor = true;
        $this->parts['{input}'] = Html::activeRadioList($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * Renders a widget as the input of the field.
     *
     * Note that the widget must have both `model` and `attribute` properties. They will
     * be initialized with [[model]] and [[attribute]] of this field, respectively.
     *
     * If you want to use a widget that does not have `model` and `attribute` properties,
     * please use [[render()]] instead.
     *
     * For example to use the [[MaskedInput]] widget to get some date input, you can use
     * the following code, assuming that `$form` is your [[ActiveForm]] instance:
     *
     * ```php
     * $form->field($model, 'date')->widget(\yii\widgets\MaskedInput::className(), [
     *     'mask' => '99/99/9999',
     * ]);
     * ```
     *
     * If you set a custom `id` for the input element, you may need to adjust the [[$selectors]] accordingly.
     *
     * @param string $class the widget class name.
     * @param array $config name-value pairs that will be used to initialize the widget.
     * @return $this the field object itself.
     */
    public function widget($class, $config = [])
    {
        /* @var $class \yii\base\Widget */
        $config['model'] = $this->model;
        $config['attribute'] = $this->attribute;
        $config['view'] = $this->form->getView();
        $this->parts['{input}'] = $class::widget($config);

        return $this;
    }

    /**
     * Returns the JS options for the field.
     * @return array the JS options.
     */
    protected function getClientOptions()
    {
        $attribute = Html::getAttributeName($this->attribute);
        if (!in_array($attribute, $this->model->activeAttributes(), true)) {
            return [];
        }

        $enableClientValidation = $this->enableClientValidation || $this->enableClientValidation === null && $this->form->enableClientValidation;
        $enableAjaxValidation = $this->enableAjaxValidation || $this->enableAjaxValidation === null && $this->form->enableAjaxValidation;

        if ($enableClientValidation) {
            $validators = [];
            foreach ($this->model->getActiveValidators($attribute) as $validator) {
                /* @var $validator \yii\validators\Validator */
                $js = $validator->clientValidateAttribute($this->model, $attribute, $this->form->getView());
                if ($validator->enableClientValidation && $js != '') {
                    if ($validator->whenClient !== null) {
                        $js = "if (({$validator->whenClient})(attribute, value)) { $js }";
                    }
                    $validators[] = $js;
                }
            }
        }

        if (!$enableAjaxValidation && (!$enableClientValidation || empty($validators))) {
            return [];
        }

        $options = [];

        $inputID = $this->getInputId();
        $options['id'] = Html::getInputId($this->model, $this->attribute);
        $options['name'] = $this->attribute;

        $options['container'] = isset($this->selectors['container']) ? $this->selectors['container'] : ".field-$inputID";
        $options['input'] = isset($this->selectors['input']) ? $this->selectors['input'] : "#$inputID";
        if (isset($this->selectors['error'])) {
            $options['error'] = $this->selectors['error'];
        } elseif (isset($this->errorOptions['class'])) {
            $options['error'] = '.' . implode('.', preg_split('/\s+/', $this->errorOptions['class'], -1, PREG_SPLIT_NO_EMPTY));
        } else {
            $options['error'] = isset($this->errorOptions['tag']) ? $this->errorOptions['tag'] : 'span';
        }

        $options['encodeError'] = !isset($this->errorOptions['encode']) || $this->errorOptions['encode'];
        if ($enableAjaxValidation) {
            $options['enableAjaxValidation'] = true;
        }
        foreach (['validateOnChange', 'validateOnBlur', 'validateOnType', 'validationDelay'] as $name) {
            $options[$name] = $this->$name === null ? $this->form->$name : $this->$name;
        }

        if (!empty($validators)) {
            $options['validate'] = new JsExpression("function (attribute, value, messages, deferred, \$form) {" . implode('', $validators) . '}');
        }

        // only get the options that are different from the default ones (set in yii.activeForm.js)
        return array_diff_assoc($options, [
            'validateOnChange' => true,
            'validateOnBlur' => true,
            'validateOnType' => false,
            'validationDelay' => 500,
            'encodeError' => true,
            'error' => '.help-block',
        ]);
    }
}
