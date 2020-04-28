<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/adminlte/dist/plugins';

    public $css = [
          'sweetalert2/sweetalert2.css',
          'toastr/toastr.css',
//          'overlayScrollbars/OverlayScrollbars.min.css',
    ];

    public $js = [
        'sweetalert2/sweetalert2.js',
        'toastr/toastr.min.js',
//        'overlayScrollbars/jquery.overlayScrollbars.min.js',
//        'overlayScrollbars/OverlayScrollbars.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'sweetalert2/*',
            'toastr/*',
//            'overlayScrollbars/*'
        ]
    ];
}