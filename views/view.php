<?php

/** @var keygenqt\share2\Share2 $widget */

use \yii\helpers\Html;

?>

<style>
    .yii2-share2 {
        position: relative;
        font-size: 0;
    }
    .ya-share2__list_direction_horizontal > .ya-share2__item:last-child {
        margin-right: 0;
    }
    .yii2-share2 .ya-share2__badge {
        opacity: 0;
    }
    .yii2-share2 ul {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        margin: 0;
        padding: 0;
    }
    .yii2-share2 ul li {
        background-repeat: no-repeat;
        display: inline-block;
        background-size: cover;
    }
    .yii2-share2 ul li:last-child {
        margin-right: 0;
    }
    .ya-share2__container_size_m .ya-share2__item {
        margin: 0;
    }

    .yii2-share2-<?= $widget->getId() ?> {
        height: <?= $widget->size ?>px;
    }
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
