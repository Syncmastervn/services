<?php

namespace frontend\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'frontend/web/css/site.css',
        'frontend/web/css/style.css',
        'frontend/web/css/jquery-ui.min.css',
        'frontend/web/plugins/owl-carousel/owl.carousel.css',
        'frontend/web/plugins/owl-carousel/owl.theme.css',
        'frontend/web/plugins/bxslider/jquery.bxslider.css'
    ];
    public $js = [
        //'frontend/web/js/jactive.js'       
        'frontend/web/js/vendors.min.js',
        'frontend/web/js/jquery-ui.min.js',
        'frontend/web/js/script.js',
        'frontend/web/plugins/autocomplete/jquery.mockjax.js',
        'frontend/web/plugins/autocomplete/jquery.autocomplete.js',
        'frontend/web/plugins/autocomplete/usastates.js',
        'frontend/web/plugins/autocomplete/autocomplete-demo.js',
        'frontend/web/bootstrap/js/bootstrap.js',
        'frontend/web/plugins/bxslider/jquery.bxslider.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
}
