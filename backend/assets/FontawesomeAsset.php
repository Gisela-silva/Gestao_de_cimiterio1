<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class FontawesomeAsset extends AssetBundle
{

    /**
     * @inherit
     */
    #public $sourcePath = '@vendor/bower/fontawesome';
    public $sourcePath = '@vendor/bower/adminlte/dist/plugins/fontawesome-free';

    /**
     * @inherit
     */
    public $css = [
        #'css/font-awesome.min.css',
        'css/all.min.css',
    ];

//    public $publishOptions = [
//        'only' => [
//            'css/*',
//            'webfonts/*',
//        ]
//    ];

    /**
     * Initializes the bundle.
     * Set publish options to copy only necessary files (in this case css and font folders)
     * @codeCoverageIgnore
     */
//    public function init()
//    {
//        parent::init();
//
//        $this->publishOptions['beforeCopy'] = function ($from, $to) {
//            return preg_match('%(/|\\\\)(fonts|css)%', $from);
//        };
//    }



}