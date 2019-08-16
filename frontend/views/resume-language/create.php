<?php

use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $model app\models\ResumeLanguage */

?>
<div class="resume-language-create">

    <div class="row">
        <div class="col-md-10 labelEditingMode">
            <label><?= Html::encode('Editing mode') ?></label>
        </div>
        <div class="col-md-2">
            <span data_action="resume-language" class="closeEditingMode"></span>
        </div>
    </div>
    <?php 
    if ($dataProvider->getTotalCount() > 0) {
    ?>
    <div class="existing-list row">
        <div class="col-md-12">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) use($fieldOptions){
                    return $this->render('_list_item_editmode', [
                        'model' => $model,
                        'fieldOptions'  => $fieldOptions
                    ]);
                }
            ]); ?>
        </div>
        <div class="col-md-12  dotLineunmargin">
            <hr>
        </div>
    </div>
    <?php }?>
    <div class="resume-language-create row">

        <?= $this->render('_form', [
            'model'         => $model,
            'fieldOptions'  => $fieldOptions
        ]) ?>

    </div>
