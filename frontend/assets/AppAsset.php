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
        'css/may.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset', // this line
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
    public $js = [
        /*"/app-assets/vendors/js/vendors.min.js",
        "/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js",
        "/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js",
        "/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js",


        "/app-assets/vendors/js/charts/apexcharts.min.js",
        "/app-assets/vendors/js/extensions/dragula.min.js",


        "/app-assets/js/scripts/configs/vertical-menu-light.js",
        "/app-assets/js/core/app-menu.js",
        "/app-assets/js/core/app.js",
        "/app-assets/js/scripts/components.js",
        "/app-assets/js/scripts/footer.js",
        "/app-assets/js/scripts/pages/dashboard-analytics.js",*/
    ];
}
