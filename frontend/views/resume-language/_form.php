<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeLanguage */
/* @var $form yii\widgets\ActiveForm */
//$fieldOptions
?>

<div class="resume-language-form col-md-12">

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
    <div class="row">
        <div class="col-md-9">
            <?= $form->field($model, 'LanguageCode')
                    ->dropDownList($fieldOptions['langList'] ?? [], ['prompt' => Yii::t('app', 'Select Language') . ' ...',])
                    ->label(FALSE) ?>
        </div>
        <div class="col-md-3">
            <?= Html::submitButton(Yii::t('app', 'Add'), ['class' => 'btn btn-primary saveButton tBlueStandart']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <?= $form->field($model, 'Level')
                    ->dropDownList($fieldOptions['langLevelList'] ?? [], ['prompt' => Yii::t('app', 'Select Level') . ' ...',])
                    ->label() ?>
        </div>
    </div>
       
    <?php ActiveForm::end(); ?>

</div>
