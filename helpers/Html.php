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

        $menuOptions['class'] = 'items-container';
        if (isset($options['style'])) {
            $menuOptions['style'] = $options['style'];
            unset($options['style']);
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
            $lines[] = static::tag('div', $prompt, ['class' => 'menu-item', 'data-value' => '']);
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
                    $textDivs .= static::tag('div', $listLine, ['class' => 'subtitle']) . "\n";
                }
                if (!empty($textDivs)) {
                    $textDivs = static::tag('div', "\n" . $textDivs, ['class' => 'text']);
                }
                $text = static::tag('div', "\n" . $text . $textDivs, ['class' => 'list-item']);
            } else {
                $text = $encode ? static::encode($value) : $value;
                if ($encodeSpaces) {
                    $text = str_replace(' ', '&nbsp;', $text);
                }
            }

            static::addCssClass($attrs, 'menu-item');
            $attrs['data-value'] = $attrs['value'];
            unset($attrs['value']);

            $lines[] = static::tag('div', $text, $attrs);
        }

        return implode("\n", $lines);
    }
}