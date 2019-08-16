<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeVolunteer */

//$this->title = Yii::t('app', 'Update Resume Volunteer: {name}', [
//    'name' => $model->Title,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Volunteers'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->IdResumeVolunteer]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10 labelEditingMode">
            <label><?= Html::encode('Editing mode') ?></label>
        </div>
        <div class="col-md-2">
            <span data_action="resume-volunteer" class="closeEditingMode"></span>
        </div>
    </div>
    <div class="resume-volunteer-update dataPreserver" data_id="<?=$model->IdResumeVolunteer?>">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
                'model' => $model,
                'yearList' => $yearList
            ]) ?>

    </div>
</div>
