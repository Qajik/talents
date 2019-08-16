<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeLanguage */

$this->title = Yii::t('app', 'Update Resume Language: {name}', [
    'name' => $model->IdResumeLanguage,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdResumeLanguage, 'url' => ['view', 'id' => $model->IdResumeLanguage]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="resume-language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
