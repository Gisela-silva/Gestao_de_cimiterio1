<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class OverlayScrollbarsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminlte/dist/plugins/overlay-scrollbars';

    public $css = [
        'css/overlay_scrollbars.min.css',
    ];

    public $js = [
        'js/jquery.overlay_scrollbars.min.js',
        'js/overlay_scrollbars.min.js'
    ];

    public $publishOptions = [
        'only' => [
            'js/*',
            'css/*',
        ]
    ];
}