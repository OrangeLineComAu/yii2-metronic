<?php

/**
 * @link http://www.shenl.com/
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;

/**
 * Global mandatory styles and scripts
 *
 * Class CoreAsset
 * @package hustshenl\metronic\bundles
 */
class CoreAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@hustshenl/metronic/assets/';

    /**
     * @var array depended packages
     */
    public $depends = [
        'yii\web\YiiAsset',
        // Provides font awesome
        'hustshenl\metronic\bundles\FontAsset',
        // Provides bootstrap.css (via BootstrapAsset)
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'global/plugins/simple-line-icons/simple-line-icons.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'global/plugins/js.cookie.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    ];

    /**
     * @var array js options
     */
    public $jsOptions = [
        'conditions' => [
            'plugins/respond.min.js' => 'if lt IE 9',
            'plugins/excanvas.min.js' => 'if lt IE 9',
        ],
    ];
}
