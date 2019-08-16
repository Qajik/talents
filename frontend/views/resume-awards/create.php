<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeAwards */

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
    <div class="resume-awards-create">

        <?= $this->render('_form', [
            'model' => $model,
            'yearList' => $yearList,
        ]) ?>

    </div>
</div>
