<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TalentsProjects */

$this->title = Yii::t('app', 'Update Talents Projects: {name}', [
    'name' => $model->Title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Talents Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->IdTalentsProjects]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="talents-projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
