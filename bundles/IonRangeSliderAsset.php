<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;

/**
 * IonRangeSliderAsset for slider widget.
 */
class IonRangeSliderAsset extends AssetBundle {

    public $sourcePath = '@hustshenl/metronic/assets';
    public $js = [
        'global/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js',
    ];
    public $css = [
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.css',
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.Metronic.css',
    ];
    public $depends = [
        'hustshenl\metronic\bundles\CoreAsset',
    ];

}
