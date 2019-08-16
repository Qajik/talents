<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeEducations */

//$this->title = Yii::t('app', 'Update Resume Educations: {name}', [
//    'name' => $model->IdResumeEducations,
//]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resume Educations'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->IdResumeEducations, 'url' => ['view', 'id' => $model->IdResumeEducations]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10 labelEditingMode">
            <label><?= Html::encode('Editing mode') ?></label>
        </div>
        <div class="col-md-2">
            <span data_action="resume-awards" class="closeEditingMode"></span>
        </div>
    </div>

    <div class="resume-awards-update dataPreserver" data_id="<?=$model->IdResumeAwards?>">
        <?= $this->render('_form', [
            'model' => $model,
            'yearList' => $yearList
        ]) ?>

    </div>
</div>
