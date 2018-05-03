<?php

namespace vip9008\materialgrid\helpers;

use yii\helpers\ArrayHelper;
use yii\helpers\Html as BaseHtml;

class Html extends BaseHtml
{
    public static function inputBlock($type, $name = null, $value = null, $inputOptions = [], $options = [])
    {
        if (!isset($inputOptions['type'])) {
            $inputOptions['type'] = $type;
        }
        $inputOptions['name'] = $name;
        $inputOptions['value'] = $value === null ? null : (string) $value;
        $label = ArrayHelper::remove($inputOptions, 'placeholder', ArrayHelper::remove($inputOptions, 'label', $inputOptions['name']));
        static::addCssClass($options, "form-input");
        static::addCssClass($inputOptions, "text-input");
        return static::tag('div', static::tag('input', '', $inputOptions)."\n".static::tag('div', $label, ['class' => 'label']), $options);
    }

    public static function listItem($options) {
        $avatar = ArrayHelper::remove($options, 'avatar', false);
        $icon = ArrayHelper::remove($options, 'icon', false);
        $text = ArrayHelper::remove($options, 'text', false);

        $html = "";

        if ($avatar) {
            $class = "avatar";
            if (empty(ArrayHelper::getValue($avatar, 'sideAction', false))) {
                $class = "avatar side-action";
            }
            $html .= static::tag('div', ArrayHelper::getValue($avatar, 'content', ""), ['class' => $class])."\n";
        }
        if ($icon) {
            $class = "icon";
            if (!empty(ArrayHelper::getValue($avatar, 'sideAction', false))) {
                $class = "icon side-action";
            }
            $html .= static::tag('div', $icon, ['class' => $class])."\n";
        }

        $title = static::tag('div', $text['title'], ['class' => 'title'])."\n";
        if (empty(ArrayHelper::getValue($text, 'subtitle', false))) {
            static::addCssClass($options, "list-item one-line");
        } else {
            $title .= static::tag('div', $text['subtitle'], ['class' => 'subtitle'])."\n";
            static::addCssClass($options, "list-item");
        }
        $html .= static::tag('div', $title, ['class' => "text"])."\n";

        return Html::tag('div', $html, $options);
    }

    public static function dropDownList($name, $selection = null, $items = [], $options = [])
    {
        if (!empty($options['multiple'])) {
            return static::listBox($name, $selection, $items, $options);
        }

        $error_message = ArrayHelper::remove($options, 'errorMessage', false);

        unset($options['unselect'], $options['name']);
        $selectOptions = static::renderSelectOptions($selection, $items, $options, $error_message);

        $menuOptions['class'] = 'items-container list';
        if (isset($options['listHeight'])) {
            $menuOptions['style'] = "max-height: none; height: {$options['listHeight']}px;";
            unset($options['listHeight']);
        }

        static::addCssClass($options, "select-value");

        $dropDownList = static::tag('div', "\n" . $selectOptions . "\n", $menuOptions);
        $dropDownList = static::tag('div', "\n" . $dropDownList . "\n", ['class' => 'select-menu']);
        $dropDownList .= "\n" . static::hiddenInput($name, $selection, $options);

        return $dropDownList;
    }

    public static function dropDownInput($name, $selection = null, $items = [], $options = [])
    {
        $label = ArrayHelper::remove($options, 'label', $name);
        $type = ArrayHelper::remove($options, 'type', '');
        static::addCssClass($options, ['form-input', 'select-control', $type]);
        $class = ArrayHelper::remove($options, 'class');
        $textOptions = ['type' => 'text', 'class' => 'text-input'];

        if (ArrayHelper::getValue($options, 'placeholder', false)) {
            $textOptions['placeholder'] = ArrayHelper::remove($options, 'placeholder', '');
        }

        if (isset($items[$selection])) {
            $textOptions['value'] = $items[$selection];
        }

        if ($type != 'bar-menu') {
            $textOptions['disabled'] = true;
        } else {
            $options['errorMessage'] = ArrayHelper::getValue($options, 'errorMessage', "Can't find any match!");
        }

        return static::tag('div',
            static::tag('div', 'arrow_drop_down', ['class' => 'material-icon side-action text-secondary']).
            static::tag('input', '', $textOptions).
            static::tag('div', $label, ['class' => 'label']).
            static::dropDownList($name, $selection, $items, $options),
        ['class' => $class]);
    }

    public static function renderSelectOptions($selection, $items, &$tagOptions = [], $error_message = false)
    {
        $lines = [];
        $encodeSpaces = ArrayHelper::remove($tagOptions, 'encodeSpaces', false);
        $encode = ArrayHelper::remove($tagOptions, 'encode', true);
        if (isset($tagOptions['prompt'])) {
            $prompt = $encode ? static::encode($tagOptions['prompt']) : $tagOptions['prompt'];
            if ($encodeSpaces) {
                $prompt = str_replace(' ', '&nbsp;', $prompt);
            }
            $prompt = static::tag('div', static::tag('div', $prompt, ['class' => 'title']), ['class' => 'text']);
            $lines[] = static::tag('div', $prompt, ['class' => 'list-item one-line', 'data-value' => '']);
        }

        $options = isset($tagOptions['options']) ? $tagOptions['options'] : [];
        $groups = isset($tagOptions['groups']) ? $tagOptions['groups'] : [];
        unset($tagOptions['prompt'], $tagOptions['options'], $tagOptions['groups']);
        $options['encodeSpaces'] = ArrayHelper::getValue($options, 'encodeSpaces', $encodeSpaces);
        $options['encode'] = ArrayHelper::getValue($options, 'encode', $encode);

        foreach ($items as $key => $value) {
            $attrs = isset($options[$key]) ? $options[$key] : [];
            $attrs['value'] = (string) $key;
            if (!array_key_exists('selected', $attrs)) {
                $attrs['selected'] = $selection !== null &&
                    (!ArrayHelper::isTraversable($selection) && !strcmp($key, $selection)
                    || ArrayHelper::isTraversable($selection) && ArrayHelper::isIn($key, $selection));
                if ($attrs['selected']) {
                    static::addCssClass($attrs, 'active');
                }
                unset($attrs['selected']);
            }

            if (is_array($value)) {
                $list_item_class = "list-item one-line";
                $text = '';
                if (isset($value['avatar'])) {
                    $text .= static::tag('div', Html::img($value['avatar'], ['class' => 'img']), ['class' => 'avatar']) . "\n";
                }
                $textDivs = '';
                if (isset($value['title'])) {
                    $listLine = $encode ? static::encode($value['title']) : $value['title'];
                    if ($encodeSpaces) {
                        $listLine = str_replace(' ', '&nbsp;', $listLine);
                    }
                    $textDivs .= static::tag('div', $listLine, ['class' => 'title']) . "\n";
                }
                if (isset($value['subtitle'])) {
                    $listLine = $encode ? static::encode($value['subtitle']) : $value['subtitle'];
                    if ($encodeSpaces) {
                        $listLine = str_replace(' ', '&nbsp;', $listLine);
                    }
                    $list_item_class .= "list-item";
                    $textDivs .= static::tag('div', $listLine, ['class' => 'subtitle']) . "\n";
                    static::addCssClass($attrs, 'list-item');
                } else {
                    static::addCssClass($attrs, 'list-item one-line');
                }
                if (!empty($textDivs)) {
                    $textDivs = static::tag('div', "\n" . $textDivs, ['class' => 'text']);
                }
                $text .= $textDivs;
            } else {
                static::addCssClass($attrs, 'list-item one-line');
                $text = $encode ? static::encode($value) : $value;
                if ($encodeSpaces) {
                    $text = str_replace(' ', '&nbsp;', $text);
                }
                $text = static::tag('div', static::tag('div', $text, ['class' => 'title']), ['class' => 'text']);
            }
            $attrs['data-value'] = $attrs['value'];
            unset($attrs['value']);
            $attrs['href'] = 'javascript: ;';
            $lines[] = static::tag('a', $text, $attrs);
        }

        if ($error_message) {
            $lines[] = static::tag('div',
                static::tag('div',
                    static::tag('div',
                        $error_message,
                    ['class' => 'title']),
                ['class' => 'text text-secondary']),
            ['class' => 'list-item one-line error-message hidden']);
        }

        return static::tag('div', implode("\n", $lines), ['class' => 'list-group']);
    }

    protected static function datePicker($name, $selection = null, $options = [])
    {
        $picker_id = ArrayHelper::remove($options, 'datepicker-id', 'date-picker');

        unset($options['name']);
        static::addCssClass($options, "select-value");

        $datePicker = static::hiddenInput($name, $selection, $options);
        $datePicker .= static::renderDatePickerDialog($picker_id);

        return $datePicker;
    }

    protected static function renderDatePickerDialog($id = 'date-picker')
    {
        return <<<HTML
<div id="{$id}" class="dialog-background date-picker-container" data-selected-date="" data-current-date="">
    <div class="dialog-container">
        <div class="dialog date-picker">
            <div class="header bg-indigo">
                <div class="year"></div>
                <div class="day"></div>
            </div>
            <div class="calendar">
                <div class="month-control text-primary">
                    <a href="javascript: ;" class="material-icon prev">keyboard_arrow_left</a>
                    <span class="month-text"></span>
                    <a href="javascript: ;" class="material-icon next">keyboard_arrow_right</a>
                </div>
                <div class="full-month">
                </div>
            </div>
            <div class="years layout-cards indigo">
            </div>
            <div class="actions">
                <div class="btn-group">
                    <a href="javascript: close_dialog('#{$id}');" class="btn text-secondary abort">Cancel</a>
                    <a href="javascript: close_dialog('#{$id}');" class="btn text-secondary confirm">Ok</a>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;
    }

    protected static function booleanInput($type, $name, $checked = false, $options = [])
    {
        $value = $checked ? 1 : 0;

        $hiddenOptions = [];
        if (isset($options['form'])) {
            $hiddenOptions['form'] = $options['form'];
        }

        $label = '';
        if (isset($options['label'])) {
            $label = static::tag('span', $options['label'], ['class' => "label"]);
        }

        $input = static::tag(
            'div',
            static::hiddenInput($name, $value, $hiddenOptions),
            ['class' => "checkbox"]
        ).$label;

        return $input;
    }

    public static function errorSummary($models, $options = [])
    {
        $icon = static::tag('div', 'error', ['class' => 'material-icon']);
        $header = "<p>" . ArrayHelper::remove($options, 'header', \Yii::t('yii', 'Correct the following errors:')) . "</p>";
        $footer = ArrayHelper::remove($options, 'footer', '');
        $encode = ArrayHelper::remove($options, 'encode', true);
        $showAllErrors = ArrayHelper::remove($options, 'showAllErrors', false);
        $lines = self::collectErrors($models, $encode, $showAllErrors);
        if (empty($lines)) {
            // still render the placeholder for client-side validation use
            $content = '<ul></ul>';
            $options['style'] = isset($options['style']) ? rtrim($options['style'], ';') . '; display:none' : 'display:none';
        } else {
            $content = '<ul><li>' . implode("</li>\n<li>", $lines) . '</li></ul>';
        }
        static::addCssClass($options, ['note', 'bg-red']);
        return static::tag('div', $icon . $header . $content . $footer, $options);
    }

    private static function collectErrors($models, $encode, $showAllErrors)
    {
        $lines = [];
        if (!is_array($models)) {
            $models = [$models];
        }

        foreach ($models as $model) {
            $lines = array_unique(array_merge($lines, $model->getErrorSummary($showAllErrors)));
        }

        // If there are the same error messages for different attributes, array_unique will leave gaps
        // between sequential keys. Applying array_values to reorder array keys.
        $lines = array_values($lines);

        if ($encode) {
            foreach ($lines as &$line) {
                $line = Html::encode($line);
            }
        }

        return $lines;
    }

    public static function activePasswordInput($model, $attribute, $options = [])
    {
        return static::a('visibility_off', 'javascript: ;', [
                   'class' => 'material-icon side-action',
                   'tabindex' => 999,
                   'data-action' => 'change_visibility',
               ]).
               parent::activePasswordInput($model, $attribute, $options);
    }

    public static function activeDatePicker($model, $attribute, $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : static::getInputName($model, $attribute);
        $selection = isset($options['value']) ? $options['value'] : static::getAttributeValue($model, $attribute);

        return static::datePicker($name, $selection, $options);
    }
}