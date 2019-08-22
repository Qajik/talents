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
        'css/jquery-ui-1.12.1.min.css',
        'css/common.css',
        'css/companies/company-profile.css',
        
    ];
    public $js = [
        'js/jquery-ui-1.12.1.min.js',
        'js/company-profile.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
