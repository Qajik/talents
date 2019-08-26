<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Description of HomePageAsset
 *
 * @author Qajik
 */
class HomePageAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/font-awesome-5.9.0.css",
        "css/home/bootstrap.min.css",
        "css/home/jquery-ui.css",
        "css/home/owl.carousel.min.css",
        "css/home/owl.theme.default.min.css",
        "css/home/jquery.fancybox.min.css",
        "css/home/bootstrap-datepicker.css",
        "css/home/aos.css",
        "css/home/style.css"
    ];
    public $js = [
        //"js/home/jquery-3.3.1.min.js",
        "js/home/jquery-migrate-3.0.1.min.js",
        "js/home/jquery-ui.js",
        "js/home/popper.min.js",
        "js/home/bootstrap.min.js",
        "js/home/owl.carousel.min.js",
        "js/home/jquery.stellar.min.js",
        "js/home/jquery.countdown.min.js",
        "js/home/bootstrap-datepicker.min.js",
        "js/home/jquery.easing.1.3.js",
        "js/home/aos.js",
        "js/home/jquery.fancybox.min.js",
        "js/home/jquery.sticky.js",
        "js/home/main.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
