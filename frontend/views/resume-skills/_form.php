<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeSkills */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-skills-form">

    <?php $form = ActiveForm::begin([
      'options' => [
        'class' => 'optionAjaxSubmitForm'
      ],
      'id' => 'createSkill',
   //'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true])->label(false) ?>

    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'optionAjaxSubmitButton btn btn-success']) ?>
    

    <?php ActiveForm::end(); ?>

</div>
