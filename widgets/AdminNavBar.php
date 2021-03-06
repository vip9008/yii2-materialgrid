<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use vip9008\materialgrid\assets\AdminAsset;

class AdminNavBar extends \yii\base\Widget
{
    public $containerOptions = [];
    public $brandLabel = false;
    public $brandUrl = '#';
    public $brandOptions = [];
    public $copyright = false;
    public $copyrightOptions = [];
    public $primaryColor = false;
    public $accentColor = false;
    public $themeColor = false;
    public $theme = 'light-theme';

    public function init()
    {
        parent::init();
        AdminAsset::register($this->getView());

        // begin side nav container
        echo Html::beginTag("div", ["id" => "side-nav", "class" => "layout-app-bar ".$this->theme.($this->themeColor ? " bg-$this->themeColor" : "")]);

        // begin nav container
        Html::addCssClass($this->containerOptions, ['side-nav-container']);
        echo Html::beginTag("div", $this->containerOptions);
        
        if ($this->brandLabel) {
            Html::addCssClass($this->brandOptions, "text-primary");
            // begin logo container
            echo Html::beginTag("div", ["class" => "logo"]);
            echo Html::a($this->brandLabel, $this->brandUrl, $this->brandOptions);
            // end logo container
            echo Html::endTag('div');
        }

        // begin nav list container
    }

    public function run()
    {
            // end nav list container

            if ($this->copyright) {
            // begin copyright container
                Html::addCssClass($this->copyrightOptions, ['copyright']);
                echo Html::beginTag("div", $this->copyrightOptions);
                    foreach ($this->copyright as $item) {
                        $options = isset($item['options']) ? $item['options'] : [];
                        echo Html::tag('div', $item['content'], $options);
                    }
                // end copyright container
                echo Html::endTag('div');
            }

        // end nav container
        echo Html::endTag('div');

        // end side nav container
        echo Html::endTag('div');
    }
}
