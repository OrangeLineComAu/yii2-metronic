<?php

/**
 * @link http://www.shenl.com/
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;
use hustshenl\metronic\Metronic;
use Yii;

class ThemeAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@hustshenl/metronic/assets/layouts/{version}';

    /**
     * @var array make this dependent only on dev
     */
//    public $publishOptions = ['forceCopy' => true];

    /**
     * @var array depended bundles
     */
    public $depends = [
        'hustshenl\metronic\bundles\CoreAsset',
        'hustshenl\metronic\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
        'css/themes/{theme}.css',
        'css/custom.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'scripts/layout.js',
        'scripts/demo.js',


    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleSourcePath();

        $this->_handleDynamicCss();

        if (YII_ENV_DEV) {
            Yii::info("Setting force copy for Metronic theme assets");
            $this->publishOptions = ['forceCopy' => true];
        }

        return parent::init();
    }

    /**
     * Parses source path
     */
    private function _handleSourcePath()
    {
        Metronic::getComponent()->parseAssetsParams($this->sourcePath);
    }

    /**
     * Parses dynamic css
     */
    private function _handleDynamicCss()
    {
        array_walk($this->css, array(Metronic::getComponent(), 'parseAssetsParams'));
    }

}
