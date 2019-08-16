<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeAwards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-awards-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'optionAjaxSubmitForm'
        ],
        'fieldConfig' => [
            'options' => [
           //     'tag' => false,
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'Title')
        ->textInput(['maxlength' => true, 'placeholder' => "Entry"])
        ->label() ?>

    <?= $form->field($model, 'Field')
        ->textInput(['maxlength' => true, 'placeholder' => "Entry"])
        ->label() ?>
    
    <?=$form->field($model, 'Year', ['options' => []])
        ->dropDownList($yearList, ['prompt' => Yii::t('app','Select Year') . ' ...'])
        ->label() ?>
    
    <?= $form->field($model, 'Description')
        ->textarea(['rows' => 6, 'placeholder' => "Entry"])
        ->label() ?>

    <div class="form-bottom np">
        <div class="">
            <?php
            if(!$model->isNewRecord){
                echo Html::a(Yii::t('app', 'Delete'), null, ['class' => 'btn btn-default deleteItemFromOptions']);
            }
            ?>
        </div>
        <div>
            <?= Html::a(Yii::t('app', 'Cancel'), null, ['class' => 'toClose']) ?>
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'optionAjaxSubmitButton btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
