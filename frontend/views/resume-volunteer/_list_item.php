<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-md-12 dataPreserver" data_id="<?= $model->IdResumeVolunteer ?>">

    <div class="row">
        <div class="col-md-3">
            <div class="volunteerIcoDefault optionsListedItemsDefaultIcon"></div>
        </div>
        <div class="col-md-9">
            <div class="volunteerItemDescription optionsListedItemsDescription">
                <p><span class="dateToDate"><?=$model->Year?></span></p>
                <h5><?=$model->Title?></h5>
                <p><?=$model->Website?></p>
            </div>
        </div>
    </div>
</div>