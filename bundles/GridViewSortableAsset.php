<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace hustshenl\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class GridViewSortableAsset extends AssetBundle {

    public $sourcePath = '@hustshenl/metronic/assets';

    /**
     * @var array JS
     */
    public $js = [
        'global/scripts/sortable.gridview.js',
    ];

    /**
     * @var array depends
     */
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
