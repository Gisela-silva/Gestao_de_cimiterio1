<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class DuallistboxPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminlte/dist/plugins';

    public $css = [
          'bootstrap4-duallistbox/bootstrap-duallistbox.min.css',
    ];

    public $js = [
        'bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'bootstrap4-duallistbox/*',
        ]
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}