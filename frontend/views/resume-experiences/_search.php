<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeExperiencesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-experiences-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IdResumeExperiences') ?>

    <?= $form->field($model, 'JobTitle') ?>

    <?= $form->field($model, 'idOptionsEmploymentsList') ?>

    <?= $form->field($model, 'idDiscipline') ?>

    <?= $form->field($model, 'idCareerLevel') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'CompanyName') ?>

    <?php // echo $form->field($model, 'idCompany') ?>

    <?php // echo $form->field($model, 'idIndustries') ?>

    <?php // echo $form->field($model, 'idSegments') ?>

    <?php // echo $form->field($model, 'idLegalForm') ?>

    <?php // echo $form->field($model, 'idEmployees') ?>

    <?php // echo $form->field($model, 'CompanyWebsite') ?>

    <?php // echo $form->field($model, 'StartDate') ?>

    <?php // echo $form->field($model, 'EndDate') ?>

    <?php // echo $form->field($model, 'IsCurrentJob') ?>

    <?php // echo $form->field($model, 'CreatedAt') ?>

    <?php // echo $form->field($model, 'idUsers') ?>

    <?php // echo $form->field($model, 'idResume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
