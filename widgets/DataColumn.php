<?php

namespace vip9008\materialgrid\widgets;

use yii\grid\DataColumn as BaseDataColumn;

class DataColumn extends BaseDataColumn
{
    public $headerOptions = ['class' => 'text'];
    public $contentOptions = ['class' => 'text'];
    public $footerOptions = ['class' => 'text'];

    public $columnType = '';

    public function __construct($config = [])
    {
        parent::__construct($config);
        if (!empty($this->columnType)) {
            $this->headerOptions['class'] = $this->columnType;
            $this->contentOptions['class'] = $this->columnType;
            $this->footerOptions['class'] = $this->columnType;
        }
    }
}