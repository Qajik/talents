<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeAwardsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-awards-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IdResumeAwards') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Field') ?>

    <?= $form->field($model, 'Year') ?>

    <?= $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'idUsers') ?>

    <?php // echo $form->field($model, 'idResume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
