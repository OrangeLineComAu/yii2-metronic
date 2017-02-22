<?php

/**
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\helpers;

use hustshenl\metronic\Metronic;
use yii\helpers\Html;

/**
 * Layout helper
 */
class Layout {

    /**
     * Retrieves Html options
     * @param string $tag given tag
     * @param boolean $asString if return as string
     * @return type
     */
    public static function getHtmlOptions($tag, $options = [], $asString = false)
    {
        $callback = sprintf('static::_%sOptions', strtolower($tag));

        $htmlOptions = call_user_func($callback, $options);

        return $asString ? Html::renderTagAttributes($htmlOptions) : $htmlOptions;
    }

    /**
     * Adds body tag options
     * @param array $options given options
     */
    private static function _bodyOptions($options)
    {
        Html::addCssClass($options, '');

        if (Metronic::LAYOUT_BOXED === Metronic::getComponent()->layoutOption)
        {
            Html::addCssClass($options, 'page-boxed');
        }

        if (Metronic::HEADER_FIXED === Metronic::getComponent()->headerOption)
        {
            Html::addCssClass($options, 'page-header-fixed');
        }

        if (Metronic::SIDEBAR_POSITION_RIGHT === Metronic::getComponent()->sidebarPosition)
        {
            Html::addCssClass($options, 'page-sidebar-reversed');
        }

        if (Metronic::SIDEBAR_FIXED === Metronic::getComponent()->sidebarOption)
        {
            Html::addCssClass($options, 'page-sidebar-fixed');
        }

        if (Metronic::FOOTER_FIXED === Metronic::getComponent()->footerOption)
        {
            Html::addCssClass($options, 'page-footer-fixed');
        }

        return $options;
    }

    /**
     * Adds header tag options
     * @param array $options given options
     */
    private static function _headerOptions($options)
    {
        Html::addCssClass($options, 'page-header navbar');

        if (Metronic::HEADER_FIXED === Metronic::getComponent()->headerOption)
        {
            Html::addCssClass($options, 'navbar-fixed-top');
        }
        else
        {
            Html::addCssClass($options, 'navbar-static-top');
        }

        return $options;
    }

    /**
     * Adds inner header options
     * @param $options array options given options
     */
    private static function _inner_headerOptions($options) {

        Html::addCssClass($options, 'page-header-inner');

        if (Metronic::LAYOUT_BOXED === Metronic::getComponent()->layoutOption)
        {
            Html::addCssClass($options, 'container');
        }

        return $options;
    }

    /**
     * Adds actions tag options
     * @param array $options given options
     */
    private static function _actionsOptions($options)
    {
        Html::addCssClass($options, 'page-actions');

        return $options;
    }

    /**
     * Adds top tag options
     * @param array $options given options
     */
    private static function _topOptions($options)
    {
        Html::addCssClass($options, 'page-top');

        return $options;
    }

    /**
     * Adds topmenu tag options
     * @param array $options given options
     */
    private static function _topmenuOptions($options)
    {
        Html::addCssClass($options, 'top-menu');

        return $options;
    }

    /**
     * Adds container tag options
     * @param array $options given options
     */
    private static function _containerOptions($options)
    {
        Html::addCssClass($options, 'container');

        return $options;
    }

    /**
     * Adds clearfix tag options
     * @param array $options given options
     */
    private static function _clearfixOptions($options)
    {
        Html::addCssClass($options, 'clearfix');

        return $options;
    }

}
