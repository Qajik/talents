<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeVolunteer */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Volunteers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resume-volunteer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->IdResumeVolunteer], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->IdResumeVolunteer], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdResumeVolunteer',
            'Title',
            'Field',
            'Website:ntext',
            'Year',
            'Description:ntext',
            'idUsers',
            'idResume',
        ],
    ]) ?>

</div>
