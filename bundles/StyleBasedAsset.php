<?php

/**
 * @link http://www.shenl.com/
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;
use yii\helpers\ArrayHelper;
use hustshenl\metronic\Metronic;

/**
 * Theme global styles and scripts
 *
 * Class StyleBasedAsset
 * @package hustshenl\metronic\bundles
 */
class StyleBasedAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@hustshenl/metronic/assets';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'hustshenl\metronic\bundles\CoreAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'global/css/plugins.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'global/scripts/app.js',

        # as-per the blank page reference for admin_4
        'layouts/global/scripts/quick-sidebar.min.js',
        'layouts/global/scripts/quick-nav.min.js'
    ];

    /**
     * @var array style based css
     */
    private $styleBasedCss = [
        Metronic::STYLE_SQUARE => [
            'global/css/components.css',
        ],
        Metronic::STYLE_ROUNDED => [
            'global/css/components-rounded.css',
        ],
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleStyleBased();

        return parent::init();
    }

    /**
     * Handles style based files
     */
    private function _handleStyleBased()
    {
        $this->css = ArrayHelper::merge($this->styleBasedCss[Metronic::getComponent()->style], $this->css);
    }

}
