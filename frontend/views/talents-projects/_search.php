<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalentsProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talents-projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IdTalentsProjects') ?>

    <?= $form->field($model, 'idUsers') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'State') ?>

    <?php // echo $form->field($model, 'CreatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
