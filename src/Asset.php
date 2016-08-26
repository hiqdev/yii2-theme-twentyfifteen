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
        'style.css',
        'css/editor-style.css',
        'genericons/genericons.css',
    ];

    public $js = [
    ];
}
