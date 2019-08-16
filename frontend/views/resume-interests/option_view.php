<?php

use yii\helpers\Html;
use yii\widgets\ListView;

?>

<?php
if ($dataProvider->getTotalCount() > 0) {
    ?>
    <div class="col-md-12 dataTagGlobal" data_action='resume-interests'>
        <!--Info block begin-->
        <div class="borderTop6px_257090 profileOptions infoBlockFloat profileCVSkilles leftSide">
            <!--Title Row Start--->
            <div class="row titleRow">
                <div class="col-md-9 titleBar">
                    <h3>Interests</h3>
                </div>
                <div class="col-md-3">
                    <button id="resume-interests" class="addOptionButton btn btn-primary">ADD</button>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <!--Title Row End--->
            <!--- Body Row Start -->
            <div class="row bodyRow">
                <div id="resume-interests-body" class="bodyCoreContentFilled">
                    <div class="col-md-12 ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="skills grup row inactiveForEditing">
                                    <?= ListView::widget([
                                        'dataProvider' => $dataProvider,
                                        'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                                        'itemView' => function ($model, $key, $index, $widget) {
                                            return $this->render('_list_item', ['model' => $model]);
                                        }
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <!--- Body Row End -->
        </div>
        <!--Info block end-->
    </div>
    <?php
} else {

    ?>

    <div class="col-md-12 dataTagGlobal" data_action='resume-interests'>
        <!--Info block begin-->
        <div class="borderTop6px_257090 profileOptions infoBlockFloat profileCVSkilles leftSide">
            <!--Title Row Start--->
            <div class="row titleRow">
                <div class="col-md-9 titleBar">
                    <h3>Interests</h3>
                </div>
                <div class="col-md-3">
                    <button id="resume-interests" class="addOptionButton btn btn-primary">ADD</button>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <!--Title Row End--->
            <!--- Body Row Start -->
            <div class="row bodyRow">
                <div id="resume-interests-body" class="">
                    <div class="col-md-12 ">
                        <div id="skillAdd-bodyEmpty" class="row bodyCoreContent">
                            <div class="col-md-3">
                                <button class="pluseBackButton addOptionButton"></button>
                            </div>
                            <div class="col-md-9">
                                <h4>Your Professional interests</h4>
                                <p>
                                    Here you will add the interests you have. Computer interests ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <!--- Body Row End -->
        </div>
        <!--Info block end-->
    </div>
<?php } ?>