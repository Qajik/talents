<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeInterestsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-interests-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IdResumeInterests') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'State') ?>

    <?= $form->field($model, 'idUsers') ?>

    <?= $form->field($model, 'idResume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
