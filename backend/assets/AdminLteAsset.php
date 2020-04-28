<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminlte/dist';

    public $css = [
          'css/AdminLTE.min.css',
    ];

    public $js = [
        'js/adminlte.min.js',
    ];

    public $depends = [
        'backend\assets\FontawesomeAsset',
        'backend\assets\AdminLtePluginAsset',
        'backend\assets\OverlayScrollbarsAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];

    public $publishOptions = [
        'only' => [
            'js/*',
            'css/*',
        ]
    ];

}