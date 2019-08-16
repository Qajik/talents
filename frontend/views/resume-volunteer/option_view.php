<?php
use yii\helpers\Html;
use yii\widgets\ListView;

?>

<?php
if($dataProvider->getTotalCount()>0){
?>
<div class="col-md-12 dataTagGlobal" data_action='resume-volunteer'>
<!--Info block begin-->  
    <div class="borderTop6px_257090 profileOptions infoBlockFloat profileCVSkilles leftSide">
<!--Title Row Start--->
        <div class="row titleRow">
            <div class="col-md-9 titleBar">
                <h3><?=Yii::t('app','Volunteer')?></h3>
            </div>
            <div class="col-md-3">
                <button id="resume-volunteer" class="addOptionButton btn btn-primary">ADD</button>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
<!--Title Row End--->
<!--- Body Row Start -->
        <div class="row bodyRow">
            <div id="resume-volunteer-body" class="bodyCoreContentFilled">
                <div class="col-md-12 ">
                    <div id="volunteerAdd-bodyEmpty" class="row bodyCoreContentFilled">
                        <div class="col-md-12">
                            <div class="volunteer grup volunteerListGroup optionsListedItemsRow">
                                <?= ListView::widget([
                                     'dataProvider' => $dataProvider,
                                     'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                                     'itemView' => function ($model, $key, $index, $widget){ 
                                        return $this->render('_list_item',[
                                             'model' => $model
                                        ]);
                                     }
                                 ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="putHeretest"></div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </div>
<!--- Body Row End -->
    </div>
<!--Info block end-->                
</div>
<?php
}else {

?>

<div class="col-md-12 dataTagGlobal" data_action='resume-volunteer'>
<!--Info block begin-->  
    <div class="borderTop6px_257090 profileOptions infoBlockFloat profileCVSkilles leftSide">
<!--Title Row Start--->
        <div class="row titleRow">
            <div class="col-md-9 titleBar">
                <h3><?=Yii::t('app','Volunteer')?></h3>
            </div>
            <div class="col-md-3">
                <button data_action="resume-volunteer" id="resume-volunteer" class="addOptionButton btn btn-primary">ADD</button>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
<!--Title Row End--->
<!--- Body Row Start -->
        <div class="row bodyRow">
            <div id="resume-volunteer-body" class="bodyCoreContentFilled">
                <div class="col-md-12 ">
                    <div id="volunteerAdd-bodyEmpty" class="row bodyCoreContent">
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
            </div>
            
        </div>
<!--- Body Row End -->
    </div>
<!--Info block end-->                
</div>
<?php }?>