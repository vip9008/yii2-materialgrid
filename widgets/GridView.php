<?php

namespace vip9008\materialgrid\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use vip9008\materialgrid\widgets\LinkPager;
use yii\grid\GridView as BaseGridView;

class GridView extends BaseGridView
{
    public $tableOptions = ['class' => ''];
    public $options = ['class' => 'data-table'];
    public $layout = "{items}\n{pager}\n{summary}";
    public $summaryContentOptions = ['class' => 'summary-right'];
    public $dataColumnClass = 'vip9008\materialgrid\widgets\DataColumn';
    public $caption = '';

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
                // return $this->renderPager();
                return '';
            case '{sorter}':
                return $this->renderSorter();
            default:
                return false;
        }
    }

    public function renderCaption()
    {
        if (!empty($this->caption)) {
            Html::addCssClass($this->captionOptions, 'table-header');
            return Html::tag('div', $this->caption, $this->captionOptions);
        } else {
            return false;
        }
    }

    public function renderItems()
    {
        $caption = $this->renderCaption();
        $columnGroup = $this->renderColumnGroup();
        $tableHeader = $this->showHeader ? $this->renderTableHeader() : false;
        $tableBody = $this->renderTableBody();
        $tableFooter = $this->showFooter ? $this->renderTableFooter() : false;
        $content = array_filter([
            $columnGroup,
            $tableHeader,
            $tableFooter,
            $tableBody,
        ]);

        $content = Html::tag('table', implode("\n", $content), $this->tableOptions);

        return $caption . "\n" . Html::tag('div', $content, ['class' => 'table-container']);
    }

    public function renderPager()
    {
        $pagination = $this->dataProvider->getPagination();
        if ($pagination === false || $this->dataProvider->getCount() <= 0) {
            return '';
        }
        /* @var $class LinkPager */
        $pager = $this->pager;
        $class = ArrayHelper::remove($pager, 'class', LinkPager::className());
        $pager['pagination'] = $pagination;
        $pager['view'] = $this->getView();

        $pager['renderPageNumbers'] = false;
        return $class::widget($pager);
    }

    public function renderSummary()
    {
        $count = $this->dataProvider->getCount();
        if ($count <= 0) {
            return '';
        }

        $paginationContent = $this->renderPager();

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
                    Html::tag('div', Yii::t('yii', '{begin, number}-{end, number} of {totalCount, number}' . $paginationContent, [
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
                    Html::tag('div', Yii::t('yii', '{count, number}' . $paginationContent, [
                        'count' => $count,
                    ]), $this->summaryContentOptions)
                , $summaryOptions);
            }
        }

        return Yii::$app->getI18n()->format($summaryContent . $paginationContent, [
            'begin' => $begin,
            'end' => $end,
            'count' => $count,
            'totalCount' => $totalCount,
            'page' => $page,
            'pageCount' => $pageCount,
        ], Yii::$app->language);
    }
}