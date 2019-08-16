<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="languageRowItemEditMode">
    <div class="row">
        <div class="col-md-12">
            <div class="languageGraphicLayer">
                <div class="progressBar level<?=$model->Level?>">
                    <?= $fieldOptions['langList'][$model->LanguageCode] . " (" . $fieldOptions['langLevelList'][$model->Level] . ")"?>
                </div>
            </div>
            <div class=""></div>
        </div>
    </div>
</div>
