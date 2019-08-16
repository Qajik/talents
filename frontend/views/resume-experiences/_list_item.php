<?php

use yii\helpers\Html;
use yii\helpers\Url;

$endDate = $model->IsCurrentJob>0?date_create('now'):date_create($model->EndDate);
$yearsDuration = date_diff(date_create($model->StartDate), $endDate)->format('%y');
$monthsDuration = date_diff(date_create($model->StartDate), $endDate)->format('%m');
?>

<div class="col-md-12 dataPreserver" data_id="<?= $model->IdResumeExperiences ?>">

    <div class="row">
        <div class="col-md-3">
            <div class="experienceIcoDefault optionsListedItemsDefaultIcon">
                <p><?=$yearsDuration>0?$yearsDuration . ' ' . Yii::t('app', 'Years'):''?></p>
                <p><?=$monthsDuration>0?$monthsDuration . ' ' . Yii::t('app', 'Months'):''?></p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="experienceEditViewMore">
                    <span class="experienceEdit optionsItemEditAction" data_id="<?= $model->IdResumeExperiences ?>"></span>
                    <span class="experienceViewMore"></span>
                </div>
            <div class="experienceItemDescription optionsListedItemsDescription">
                <p><span class="dateToDate"><?=date('M/Y',strtotime($model->StartDate))?> - <?=$model->IsCurrentJob>0?Yii::t('app', 'Currently'):date('M/Y',strtotime($model->EndDate))?></span></p>
                <h5><?=$model->JobTitle?></h5>
                <p class="companyName"><?=$model->CompanyName?></p>
                <div class="experienceOptionalForShowing">
                    <p class="website"><?=$model->CompanyWebsite?></p>
                    <p><?=Yii::t('app', 'Industry')?> : <?=$model->industries->Name?></p>
                    <p><?=Yii::t('app', 'Employees')?> : <?=$model->employees->Name?></p>
                    <p><?=Yii::t('app', 'Employment')?> : <?=$model->optionsEmploymentsList->Name?></p>
                    <p><?=Yii::t('app', 'Career Level')?> : <?=$model->careerLevel->Name?></p>
                    <p><?=Yii::t('app', 'Discipline')?> : <?=$model->discipline->Name?></p>
                    <p><?=Yii::t('app', 'Description')?> : <?=$model->Description?></p>
                </div>
            </div>
        </div>
    </div>
</div>