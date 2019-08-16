<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\AutoComplete ;
use yii\helpers\Url;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model app\models\ResumeEducations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-educations-form">

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
    
    <?= $form->field($model, 'idUniversities')->hiddenInput(['value'=> $model->idUniversities,'disabled' => true])->label(false);?>
    
    <?= $form->field($model, 'universityName')->textInput([
        'data_related_to'=>'resumeeducations-iduniversities',
        'data_search_by'=>'Name',
        'data_model'=>'1',
        'placeholder' => Yii::t('app','University'),
        'autocomplete'=>"off",
        'class'=>'tlFormAutocomplate form-control'
        ])->label(Yii::t('app','University') . '*:') ?>
        

    <?= $form->field($model, 'Field')->textInput(['maxlength' => true, 'placeholder' => "Entry"])
        ->label(Yii::t('app','Field of study') . ':') ?>

    <?= $form->field($model, 'idDegree')->dropDownList($m_DegreeList,['prompt' => Yii::t('app','Select degree') . ' ...'])
        ->label(Yii::t('app','Degree') . ':') ?>
    
    <div class="form-group field-resumeEducations-date">
        <label class="control-label">Date</label>
        <div class="row np">
            <div class="col-xs-6 col-lg-3 resumeEducations-month">
                <?= $form->field($model, 'startMonth')->dropDownList($monthList, ['prompt' => Yii::t('app','Month')])
                    ->label(FALSE) ?>
            </div>
            <div class="col-xs-6 col-lg-2 np">
                <?= $form->field($model, 'startYear')->dropDownList($yearList, ['prompt' => Yii::t('app','Year')])
                    ->label(FALSE) ?>
            </div>
            <div class="col-lg-2 col-xs-12 np to">to</div>
            <div class="col-xs-6 col-lg-3  resumeEducations-month">
                <?= $form->field($model, 'endMonth')->dropDownList($monthList, ['prompt' => Yii::t('app','Month')])
                    ->label(FALSE) ?>
            </div>
            <div class="col-xs-6 col-lg-2 np">
                <?= $form->field($model, 'endYear')->dropDownList($yearList, ['prompt' => Yii::t('app','Year')])
                    ->label(FALSE) ?>
            </div>
        </div>
        <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6, 'placeholder' => "Entry"])
        ->label('Description:') ?>

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
