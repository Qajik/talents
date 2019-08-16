<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeExperiences */

$this->title = $model->IdResumeExperiences;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Experiences'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resume-experiences-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->IdResumeExperiences], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->IdResumeExperiences], [
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
            'IdResumeExperiences',
            'JobTitle',
            'idOptionsEmploymentsList',
            'idDiscipline',
            'idCareerLevel',
            'Description:ntext',
            'CompanyName',
            'idCompany',
            'idIndustries',
            'idSegments',
            'idLegalForm',
            'idEmployees',
            'CompanyWebsite:ntext',
            'StartDate',
            'EndDate',
            'IsCurrentJob',
            'CreatedAt',
            'idUsers',
            'idResume',
        ],
    ]) ?>

</div>
