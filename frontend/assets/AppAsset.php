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
        'css/site.css',
        'css/css.css',
        'css/landing-37513be56359e0626ea76a70a573e012.css',
        'css/select2.css',
    ];
    public $js = [
    'js/yii.js',
    'js/analytics.js',
    'js/landing-bd0249e05a19c62ef871c5c87fc6130e.js',
    'js/mainasy.js',
    'js/select2.js',
    'js/yii_002.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
