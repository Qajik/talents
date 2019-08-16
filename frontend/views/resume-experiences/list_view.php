<?php

use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $model app\models\ResumeSkills */

?>
<?php
if($dataProvider->getTotalCount()>0){
?>
<div class="col-md-12">
 
    <div class="experience grup inactiveForEditing">
        
        <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) { 
                    return $this->render('_list_item',['model' => $model]);
                }
        ]); ?>
        
    </div>
</div>
<div class="col-md-12">
    <hr>
</div>

<?php
}else {

?>
<div class="col-md-12 ">
    <div id="experienceAdd-bodyEmpty" class="row bodyCoreContent">
        <div class="col-md-3">
            <button class="pluseBackButton addOptionButton"></button>
        </div>
        <div class="col-md-9">
            <h4>Your Professional educations</h4>
            <p>
                Here you will add the educations you have. Computer educations ...
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <hr>
</div>
<?php }?>