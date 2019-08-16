<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResumeEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreatedAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
