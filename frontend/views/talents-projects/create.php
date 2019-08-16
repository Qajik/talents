<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TalentsProjects */

//$this->title = Yii::t('app', 'Create Talents Projects');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Talents Projects'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talents-projects-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
