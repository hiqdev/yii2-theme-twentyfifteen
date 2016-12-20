<?php

/*
 * TwentyFifteen Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-twentyfifteen
 * @package   yii2-theme-twentyfifteen
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\twentyfifteen;

use yii\bootstrap\BootstrapAsset;
use yii\web\JqueryAsset;
use yii\web\View;

/**
 * Theme main asset bundle.
 */
class Asset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@wp-content/themes/twentyfifteen';

    /**
     * {@inheritdoc}
     */
    public $css = [
        '//fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&subset=latin%2Clatin-ext',
        'genericons/genericons.css',
        'style.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/skip-link-focus-fix.js',
        'js/keyboard-image-navigation.js',
        'js/functions.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];

    /**
     * {@inheritdoc}
     */
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $manager = $view->getAssetManager();
        $view->registerJs('
        /* <![CDATA[ */
        var screenReaderText = {"expand":"<span class=\"screen-reader-text\">expand child menu<\/span>","collapse":"<span class=\"screen-reader-text\">collapse child menu<\/span>"};
        /* ]]> */
        ', View::POS_HEAD);
        $view->registerJsFile($manager->getAssetUrl($this, 'js/html5.js'), ['condition' => 'lt IE 9', 'position' => View::POS_HEAD]);
        $view->registerCssFile($manager->getAssetUrl($this, 'css/ie.css'), ['condition' => 'lt IE 9']);
        $view->registerCssFile($manager->getAssetUrl($this, 'css/ie7.css'), ['condition' => 'lt IE 8']);
    }
}
