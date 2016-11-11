<?php

namespace vip9008\materialgrid\widgets;

use yii\grid\SerialColumn as BaseSerialColumn;

class SerialColumn extends BaseSerialColumn
{
    public $headerOptions = ['class' => 'control'];
    public $contentOptions = ['class' => 'control'];
    public $footerOptions = ['class' => 'control'];
}