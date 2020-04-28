<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    #public $sourcePath = '@web';

    public $basePath = '@webroot';
    public $baseUrl = '@web';


    public $css = [
        'css/style.css'
    ];

    public $js = [
        'js/main.js'
    ];

    public $depends = [
        'backend\assets\AdminLteAsset'
    ];

}
