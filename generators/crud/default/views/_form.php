<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\ArrayHelper;
use vip9008\materialgrid\helpers\Html;
use vip9008\materialgrid\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
$primaryColor = ArrayHelper::getValue(Yii::$app->params, 'primaryColor', 'indigo');
$accentColor = ArrayHelper::getValue(Yii::$app->params, 'accentColor', 'blue');
?>

<div class="space"></div>
<div class="space"></div>

<div class="container">
    <div class="row">
        <div class="col medium-12">
            <section class="chapter <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">
                <h1 class="chapter-title <?= '<?= $primaryColor ?>' ?>"><?= '<?= $this->title ?>' ?></h1>

                <div class="expansion-panel">
                <?= "<?php " ?>$form = ActiveForm::begin(['themeColor' => $accentColor]); ?>
                <div class="panel active">
                    <div class="label"><?= "<?= " ?>$this->title ?></div>
                    <div class="content"></div>
                    <div class="expansion-content">
<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "                        <?= " . $generator->generateActiveField($attribute) . " ?>\n";
    }
} ?>
                    </div>
                    <div class="expansion-controls">
                        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Save') ?>, ['class' => "btn $primaryColor"]) ?>
                    </div>
                </div>
                <?= "<?php " ?>ActiveForm::end(); ?>
            </section>
        </div>
    </div>
</div>
