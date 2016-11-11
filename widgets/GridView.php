<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView as BaseGridView;

class GridView extends BaseGridView
{
    public $tableOptions = ['class' => ''];
    public $options = ['class' => 'data-table'];
    public $layout = "{items}\n{pager}\n{summary}";
    public $summaryContentOptions = ['class' => 'summary-right'];
    public $dataColumnClass = 'vip9008\materialgrid\widgets\DataColumn';


    public function renderSection($name)
    {
        switch ($name) {
            case '{errors}':
                return $this->renderErrors();
            case '{summary}':
                return $this->renderSummary();
            case '{items}':
                return $this->renderItems();
            case '{pager}':
                return $this->renderPager();
            case '{sorter}':
                return $this->renderSorter();
            default:
                return false;
        }
    }

    public function renderSummary()
    {
        $count = $this->dataProvider->getCount();
        if ($count <= 0) {
            return '';
        }
        $summaryOptions = $this->summaryOptions;
        $tag = ArrayHelper::remove($summaryOptions, 'tag', 'div');
        if (($pagination = $this->dataProvider->getPagination()) !== false) {
            $totalCount = $this->dataProvider->getTotalCount();
            $begin = $pagination->getPage() * $pagination->pageSize + 1;
            $end = $begin + $count - 1;
            if ($begin > $end) {
                $begin = $end;
            }
            $page = $pagination->getPage() + 1;
            $pageCount = $pagination->pageCount;
            if (($summaryContent = $this->summary) === null) {
                return Html::tag($tag, 
                    Html::tag('div', Yii::t('yii', '{begin, number}-{end, number} of {totalCount, number}', [
                        'begin' => $begin,
                        'end' => $end,
                        'totalCount' => $totalCount,
                    ]), $this->summaryContentOptions)
                , $summaryOptions);
            }
        } else {
            $begin = $page = $pageCount = 1;
            $end = $totalCount = $count;
            if (($summaryContent = $this->summary) === null) {
                return Html::tag($tag, 
                    Html::tag('div', Yii::t('yii', '{count, number}', [
                        'count' => $count,
                    ]), $this->summaryContentOptions)
                , $summaryOptions);
            }
        }

        return Yii::$app->getI18n()->format($summaryContent, [
            'begin' => $begin,
            'end' => $end,
            'count' => $count,
            'totalCount' => $totalCount,
            'page' => $page,
            'pageCount' => $pageCount,
        ], Yii::$app->language);
    }
}