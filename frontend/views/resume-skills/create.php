<?php

use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $model app\models\ResumeSkills */

?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10 labelEditingMode">
            <label><?= Html::encode('Editing mode') ?></label>
        </div>
        <div class="col-md-2">
            <span data_action="resume-skills" class="closeEditingMode"></span>
        </div>
    </div>
    
    
    <div class="skills grup row activeForEditing">
        
        <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) { 
                    return $this->render('_list_item',['model' => $model]);
                }
        ]); ?>
        
    </div>
    <div class="resume-skills-create">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
