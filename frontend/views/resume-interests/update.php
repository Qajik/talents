<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeInterests */

$this->title = Yii::t('app', 'Update Resume Interests: {name}', [
    'name' => $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Interests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->IdResumeInterests]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="resume-interests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
