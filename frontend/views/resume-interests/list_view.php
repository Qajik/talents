<?php

use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $model app\models\ResumeSkills */

?>
<div class="col-md-12">
 
    <div class="skills grup row inactiveForEditing">
        
        <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) { 
                    return $this->render('_list_item',['model' => $model]);
                }
        ]); ?>
        
    </div>
</div>