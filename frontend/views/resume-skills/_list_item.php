<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-md-4 dataPreserver" data_id="<?= $model->IdResumeSkills ?>">
    <div class="skillsItem">
        <spam class="skillItemLabel"><?= Html::encode($model->Name) ?></spam>
        <i class="deleteSkilItem deleteItemFromOptions"></i>
    </div>
</div>