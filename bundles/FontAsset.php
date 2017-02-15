<?php
/**
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@hustshenl/metronic/assets';

    public $css = [
    	  'http://fonts.googleapis.com/css?family=Raleway:400,700',
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];
}