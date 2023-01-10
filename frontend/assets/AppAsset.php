<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800',
        'http://fonts.googleapis.com/css?family=Montserrat:400,700',
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'css/preloader.css',
        'style.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.nicescroll.js',
        'js/owl.carousel.js',
        'js/wow.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
