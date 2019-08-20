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
class CompanyProfileAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/company-profile.css',
        'css/site.css',
        'http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'
    ];
    public $js = [
        'js/company-profile.js',
        'http://code.jquery.com/ui/1.11.0/jquery-ui.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
