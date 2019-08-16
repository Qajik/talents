<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeVolunteer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-volunteer-form">

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
        ->label('Award Title*:')
    ?>

    <?= $form->field($model, 'Field')
        ->textInput(['maxlength' => true, 'placeholder' => "Entry"])
        ->label('Field*:') ?>

    <?= $form->field($model, 'Website')
        ->textInput(['placeholder' => "Entry"])
        ->label('Website:') ?>

    <div class="row">
        <?= $form->field($model, 'Year', ['options' => ['class' => 'col-lg-5']])
            ->dropDownList($yearList)
            ->label('Year:') ?>
    </div>

    <?= $form->field($model, 'Description')
        ->textarea(['rows' => 4, 'placeholder' => "Entry"])
        ->label('Description:') ?>

    <div class="form-bottom np">
        <div class="">
            <?= Html::a(Yii::t('app', 'Delete'), null, ['class' => 'btn btn-default deleteItemFromOptions']) ?>
        </div>
        <div>
            <?= Html::a(Yii::t('app', 'Cancel'), null, ['class' => 'toClose']) ?>
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'optionAjaxSubmitButton btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
