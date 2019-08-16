<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeEducationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-educations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IdResumeEducations') ?>

    <?= $form->field($model, 'idUniversities') ?>

    <?= $form->field($model, 'Field') ?>

    <?= $form->field($model, 'idDegree') ?>

    <?= $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'StartDate') ?>

    <?php // echo $form->field($model, 'EndDate') ?>

    <?php // echo $form->field($model, 'CreatedAt') ?>

    <?php // echo $form->field($model, 'idUsers') ?>

    <?php // echo $form->field($model, 'idResume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
