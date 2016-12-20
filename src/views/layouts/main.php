<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;

Yii::$app->get('themeManager')->registerAssets();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php Yii::t('hiqdev:themes:twentyfifteen', 'Skip to content') ?></a>

    <div id="sidebar" class="sidebar">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title">
                    <?= Html::a(Yii::$app->name, '/', ['rel' => 'home']) ?>
                </h1>
                <p class="site-description">
                    <?= isset(Yii::$app->params['site.description']) ? Yii::$app->params['site.description'] : '' ?>
                </p>
                <button class="secondary-toggle">
                    <?= Yii::t('hiqdev:themes:twentyfifteen', 'Menu and widgets') ?>
                </button>
            </div>
        </header>

        <div id="secondary" class="secondary">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?= Yii::$app->get('menuManager')->render('main', [
                    'class' => Menu::class,
                    'options' => ['class' => 'nav_menu'],
                ]) ?>
            </nav>
        </div>
    </div>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?= $content ?>
            </main>
        </div>
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info text-center">
            &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>
            <br>
            <?= Yii::t('hiqdev:thememanager', 'All rights reserved.') ?>
        </div>
    </footer>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
