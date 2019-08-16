<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeExperiences */

//$this->title = Yii::t('app', 'Update Resume Experiences: {name}', [
//    'name' => $model->IdResumeExperiences,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Experiences'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->IdResumeExperiences, 'url' => ['view', 'id' => $model->IdResumeExperiences]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10 labelEditingMode">
            <label><?= Html::encode('Editing mode') ?></label>
        </div>
        <div class="col-md-2">
            <span data_action="resume-educations" class="closeEditingMode"></span>
        </div>
    </div>
    <div class="resume-experiences-update dataPreserver" data_id="<?=$model->IdResumeExperiences?>"">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model'         => $model,
            'monthList'     => $monthList,
            'yearList'      => $yearList,
            'optionsLists'  => $optionsLists,
            'm_IndustryList'=> $m_IndustryList,
            'm_SegmentList' => $m_SegmentList
        ]) ?>

    </div>
</div>
