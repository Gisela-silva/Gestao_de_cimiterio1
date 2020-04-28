<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class ChartAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminlte/dist/plugins/chart.js';

    public $css = [

    ];

    public $js = [
        'Chart.min.js',
    ];

//    public $publishOptions = [
//        'only' => [
//            'chart.js/*',
//        ]
//    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}