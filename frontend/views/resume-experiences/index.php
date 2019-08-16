<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResumeExperiencesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Resume Experiences');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-experiences-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Resume Experiences'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdResumeExperiences',
            'JobTitle',
            'idOptionsEmploymentsList',
            'idDiscipline',
            'idCareerLevel',
            //'Description:ntext',
            //'CompanyName',
            //'idCompany',
            //'idIndustries',
            //'idSegments',
            //'idLegalForm',
            //'idEmployees',
            //'CompanyWebsite:ntext',
            //'StartDate',
            //'EndDate',
            //'IsCurrentJob',
            //'CreatedAt',
            //'idUsers',
            //'idResume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
