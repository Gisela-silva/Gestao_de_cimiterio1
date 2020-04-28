<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminTemplateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/bootstrap/dist';

    public $css = [
        'css/',
    ];

    public $js = [
        'js/',
    ];

    public $depends = [
        'backend\assets\FontawesomeAsset',
        'backend\assets\AdminLtePluginAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];

    public $publishOptions = [
        'only' => [
            'js/*',
            'css/*',
        ]
    ];

}