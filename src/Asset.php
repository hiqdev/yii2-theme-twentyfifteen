<?php

namespace hiqdev\themes\twentyfifteen;

/**
 * Theme main asset bundle.
 */
class Asset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@wp-content/themes/twentyfifteen';

    /**
     * @inheritdoc
     */
    public $css = [
        'style.css',
        'css/editor-style.css',
        'genericons/genericons.css',
    ];

    public $js = [
    ];

}
