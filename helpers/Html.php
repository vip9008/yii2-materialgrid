<?php

namespace vip9008\materialgrid\helpers;

use yii\helpers\ArrayHelper;
use yii\helpers\Html as BaseHtml;

class Html extends BaseHtml
{
    public static function dropDownList($name, $selection = null, $items = [], $options = [])
    {
        if (!empty($options['multiple'])) {
            return static::listBox($name, $selection, $items, $options);
        }

        unset($options['unselect'], $options['name']);
        $selectOptions = static::renderSelectOptions($selection, $items, $options);

        $menuOptions['class'] = 'items-container list';
        if (isset($options['listHeight'])) {
            $menuOptions['style'] = "max-height: none; height: {$options['listHeight']}px;";
            unset($options['listHeight']);
        }
        $dropDownList = static::tag('div', "\n" . $selectOptions . "\n", $menuOptions);
        $dropDownList = static::tag('div', "\n" . $dropDownList . "\n", ['class' => 'select-menu']);
        $dropDownList .= "\n" . static::hiddenInput($name, $selection, $options);

        return $dropDownList;
    }

    public static function renderSelectOptions($selection, $items, &$tagOptions = [])
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

        return static::tag('div', implode("\n", $lines), ['class' => 'list-group']);
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
}