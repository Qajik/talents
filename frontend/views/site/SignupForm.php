<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="SignupForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'FirstName') ?>
        <?= $form->field($model, 'LastName') ?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'Password') ?>
        <?= $form->field($model, 'Password_repeat') ?>
        <?= $form->field($model, 'Role')->dropDownList([
            4 => 'Tealents',
            5 => 'Company'
        ],['prompt'=>'Select role']) ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SignupForm -->
