<?php

namespace vip9008\materialgrid\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@vip9008/materialgrid/web';
    public $css = [
        'css/material.theme.css',
    ];
    public $js = [
        'js/material.theme.js',
    ];
    public $depends = [
        'vip9008\materialgrid\assets\MaterialAsset',
    ];
}
