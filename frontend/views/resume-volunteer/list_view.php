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
 
    <div class="volunteer grup volunteerListGroup optionsListedItemsRow">
        
        <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) { 
                    return $this->render('_list_item',[
                        'model' => $model
                    ]);
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
    <div id="skillAdd-bodyEmpty" class="row bodyCoreContent">
        <div class="col-md-3">
            <button class="pluseBackButton addOptionButton"></button>
        </div>
        <div class="col-md-9">
            <h4>Your Professional volunteer</h4>
            <p>
                Here you will add the volunteer you have. Computer volunteer ...
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <hr>
</div>
<?php }?>