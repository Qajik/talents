<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Description of TalentProfileAsset
 *
 * @author armen
 */
class TalentProfileAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/common.css',
        'css/talents/talents-profile.css',
        'css/talents/talents-projects.css',
        'css/talents/talents-cv.css',
    ];
    public $js = [
        'js/common_talent.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
