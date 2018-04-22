<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\ArrayHelper;
use vip9008\materialgrid\helpers\Html;
use vip9008\materialgrid\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$primaryColor = ArrayHelper::getValue(Yii::$app->params, 'primaryColor', 'indigo');
$accentColor = ArrayHelper::getValue(Yii::$app->params, 'accentColor', 'blue');
?>
<section class="chapter <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">
    <div class="container">
        <div class="row">
            <div class="col large-12">
                <h1 class="chapter-title <?= "<?= " ?>$primaryColor ?>"><?= "<?= " ?>Html::encode($this->title) ?></h1>

                <?= "<?= " ?>DetailView::widget([
                    'model' => $model,
                    'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "                        '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        echo "                        '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
                    ],
                ]) ?>

                <div class="btn-group">
                    <?= "<?= " ?>Html::a(<?= $generator->generateString('Delete') ?>, ['delete', <?= $urlParams ?>], [
                        'class' => "btn raised bg-$accentColor",
                        'data' => [
                            'confirm' => <?= $generator->generateString('Are you sure you want to delete this item?') ?>,
                            'method' => 'post',
                        ],
                    ]) ?>
                    <?= "<?= " ?>Html::a(<?= $generator->generateString('Update') ?>, ['update', <?= $urlParams ?>], [
                        'class' => "btn raised bg-$primaryColor",
                        ]) ?>
                </div>

            </div>
        </div>
    </div>
</section>
