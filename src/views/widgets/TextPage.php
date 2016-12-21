<?php

use yii\helpers\Html;

?>
<article class="hentry">
    <header class="entry-header">
        <h1 class="entry-title"><?= Html::encode($this->title) ?></h1>
    </header>

    <div class="entry-content">
        <?= $content ?>
    </div>

    <div class="entry-footer">
    </div>
</article>
