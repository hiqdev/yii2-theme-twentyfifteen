<?php

/*
 * TwentyFifteen Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-twentyfifteen
 * @package   yii2-theme-twentyfifteen
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'aliases' => [
        '@wp-content' => '@vendor/../wp-content',
    ],
    'components' => [
        'themeManager' => [
            'twentyfifteen' => [
                'class' => \hiqdev\themes\twentyfifteen\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev/themes/twentyfifteen' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/twentyfifteen/messages',
                    'fileMap' => [
                        'twentyfifteen' => 'twentyfifteen.php',
                    ],
                ],
            ],
        ],
    ],
];
