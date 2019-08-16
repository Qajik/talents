<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeExperiences */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-experiences-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'optionAjaxSubmitForm'
        ],
        'fieldConfig' => [
            'options' => [
            ],
        ],
    ]); ?>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'JobTitle')->textInput(['maxlength' => true, 'placeholder' => "Entry"])
                ->label() ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idOptionsEmploymentsList')
                ->dropDownList($optionsLists['employment'] ?? [], ['prompt' => Yii::t('app', 'Select Employment') . ' ...',])
                ->label() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idDiscipline')
                ->dropDownList($optionsLists['discipline'] ?? [], ['prompt' => Yii::t('app', 'Select Discipline') . ' ...',])
                ->label() ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idCareerLevel')
                ->dropDownList($optionsLists['career_level'] ?? [], ['prompt' => Yii::t('app', 'Select Career Level') . ' ...',])
                ->label() ?>
        </div>
    </div>

    <?= $form->field($model, 'Description')->textarea(['rows' => 4]) ?>

    <h4><?= Yii::t('app', 'Company') ?></h4>

    <?=$form->field($model, 'idCompany')->hiddenInput([ 'class' => ""])->label(FALSE)?>
    
    <?= $form->field($model, 'CompanyName')->textInput([
        'data_related_to'=>'resumeexperiences-idcompany',
        'data_search_by'=>'Name',
        'data_model'=>'2',
        'maxlength' => true, 
        'placeholder' => Yii::t('app', 'Company Name'),
        'autocomplete'=>"off",
        'class'=>'tlFormAutocomplate form-control'
        ])->label() ?>
    
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idIndustries')
                ->dropDownList($m_IndustryList ?? [], [
                    'prompt' => Yii::t('app', 'Select Industry') . ' ...',
                    'class'=>'form-control relatedSelectsClass',
                    'data_related_id'=>'resumeexperiences-idsegments',
                    'data_method'=>'segments'
                    ])
                ->label() ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idSegments')
                ->dropDownList($m_SegmentList ?? [], ['prompt' => Yii::t('app', 'Select Segment') . ' ...',])
                ->label() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idLegalForm')
                ->dropDownList($optionsLists['legal_form'] ?? [], ['prompt' => Yii::t('app', 'Select Legal Form') . ' ...',])
                ->label() ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <?= $form->field($model, 'idEmployees')
                ->dropDownList($optionsLists['employee'] ?? [], ['prompt' => Yii::t('app', 'Select Employees') . ' ...',])
                ->label() ?>
        </div>
    </div>

    <?= $form->field($model, 'CompanyWebsite')->textInput(['placeholder' => "Entry"])
        ->label() ?>
    <div class="row">
        <div class="col-md-12">
            <h4><?= Yii::t('app', 'Period of Employment') ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12"><label class="control-label"><?= Yii::t('app', 'Duration') ?>:</label></div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'startMonth')->dropDownList($monthList, ['prompt' => Yii::t('app','Month')])
                ->label(FALSE) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'startYear')->dropDownList($yearList, ['prompt' => Yii::t('app','Year')])
                ->label(FALSE) ?>
        </div>
        <div class="col-md-5">
            <?= $form->field($model, 'IsCurrentJob')->checkBox([
                'value'=>1,
                'class'=>'isCheckedHiddenToggle',
                'data_area'=>'.hiddenAreaOnCurrentJob'
            ]) ?>
        </div>
    </div>
    <div class="row hiddenAreaOnCurrentJob">
        <div class="col-xs-12"><label class="control-label">to:</label></div>
    </div>
    <div class="row hiddenAreaOnCurrentJob"> 
        <div class="col-md-4">
            <?= $form->field($model, 'endMonth')->dropDownList($monthList, ['prompt' => Yii::t('app','Month')])
                    ->label(FALSE) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'endYear')->dropDownList($yearList, ['prompt' => Yii::t('app','Year')])
                    ->label(FALSE) ?>
        </div>
        <div class="col-md-5"></div>
    </div>    
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
