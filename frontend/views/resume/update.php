<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resume */

$this->title = Yii::t('app', 'Update Resume: {name}', [
    'name' => $model->IdResume,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resumes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdResume, 'url' => ['view', 'id' => $model->IdResume]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
