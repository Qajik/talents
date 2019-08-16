<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeSkills */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-interests-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'optionAjaxSubmitForm'
        ],
        'id' => 'createInterests',
        //'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true])->label(false) ?>

    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'optionAjaxSubmitButton btn btn-success']) ?>


    <?php ActiveForm::end(); ?>

</div>
