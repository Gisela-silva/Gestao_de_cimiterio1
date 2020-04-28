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
class IoniconsAsset extends AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/bower/Ionicons';

    /**
     * @inherit
     */
    public $css = [
        'css/ionicons.min.css',
    ];

    /**
     * Initializes the bundle.
     * Set publish options to copy only necessary files (in this case css and font folders)
     * @codeCoverageIgnore
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
    }
}