<?php

namespace vip9008\materialgrid\assets;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@vip9008/materialgrid/web';
    public $css = [
        'css/material.font.css',
        'css/material.grid.css',
        'css/material.components.css',
        'css/material.colors.css',
    ];
    public $js = [
        'js/material.grid.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
