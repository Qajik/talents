<?php

use yii\helpers\Html;

?>
<div class="col-md-4 dataPreserver" data_id="<?= $model->IdResumeInterests ?>">
    <div class="skillsItem">
        <spam class="skillItemLabel"><?= Html::encode($model->Name) ?></spam>
        <i class="deleteQualificationItem deleteItemFromOptions"></i>
    </div>
</div>