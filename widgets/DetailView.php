<?php

namespace vip9008\materialgrid\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView as BaseDetailView;

class DetailView extends BaseDetailView
{
    public $template = '<div class="panel">
                            <div class="label">{label}</div>
                            <div class="content">{value}</div>
                        </div>';
    public $options = ['class' => 'expansion-panel'];

    public function run()
    {
        $rows = [];
        $i = 0;
        foreach ($this->attributes as $attribute) {
            $rows[] = $this->renderAttribute($attribute, $i++);
        }

        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'div');
        echo Html::tag($tag, implode("\n", $rows), $options);
    }
}
