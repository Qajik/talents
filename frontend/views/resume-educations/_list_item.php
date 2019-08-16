<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-md-12 dataPreserver" data_id="<?= $model->IdResumeEducations ?>">

    <div class="row">
        <div class="col-md-3">
            <div class="educationIcoDefault optionsListedItemsDefaultIcon"></div>
        </div>
        <div class="col-md-9">
            <div class="educationItemDescription optionsListedItemsDescription">
                <p><span class="dateToDate"><?=date('M/Y',strtotime($model->StartDate))?> - <?=date('M/Y',strtotime($model->EndDate))?></span></p>
                <h5><?=$model->universities->Name?></h5>
                <p><?=$model->options->Name?></p>
            </div>
        </div>
    </div>
</div>