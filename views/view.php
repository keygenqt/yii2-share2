<?php

/** @var keygenqt\share2\Share2 $widget */

use \yii\helpers\Html;

?>

<style>
    .yii2-share2-<?= $widget->getId() ?> .ya-share2__container_size_m .ya-share2__item {
        margin-right: <?= $widget->margin ?>px;
    }
    .yii2-share2-<?= $widget->getId() ?> .ya-share2__container_size_m .ya-share2__icon {
        width: <?= $widget->size ?>px;
        height: <?= $widget->size ?>px;
    }
    .yii2-share2-<?= $widget->getId() ?>.yii2-share2 ul li {
        width: <?= $widget->size ?>px;
        height: <?= $widget->size ?>px;
        margin-right: <?= $widget->margin ?>px;
    }
</style>

<div class="yii2-share2 yii2-share2-<?= $widget->getId() ?>">
    <?= $widget->getIcons() ?>
    <div id="<?= $widget->getId() ?>"></div>
</div>
