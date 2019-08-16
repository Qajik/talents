<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalentsProjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talents-projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'State')->textInput() ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
