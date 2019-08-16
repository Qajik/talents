<?php

use yii\widgets\ListView;

?>
<div id="talents-projects-body" class="dataTagGlobal" data_action="talents-projects">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary create-project-button addOptionButton">Add New Project</button>
        </div>
    </div>
    <?php if ($dataProvider->getTotalCount() > 0) :?>
    <div class="row">
        <div class="col-md-12">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => "{items}", //"{pager}\n{items}\n{summary}"
                'itemView' => function ($model, $key, $index, $widget) use($fieldOptions) {
                    return $this->render('_list_item', [
                        'model' => $model,
                        'fieldOptions'  => $fieldOptions
                    ]);
                }
            ]); ?>
        </div>
    </div>
    <?php  else: ?>
    <div class="row">
        <div class="col-md-12">
            <div class="empty-project-list-message">
                <p><?=Yii::t('app', 'Your project page is currently empty')?></p>
                <p><?=Yii::t('app', 'Create your portfolio by clicking the Add New Project button')?></p>
            </div>
        </div>
    </div>

    <?php endif; ?>
</div>