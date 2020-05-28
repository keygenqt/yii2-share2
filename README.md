Yii2 Share2
===================

![GitHub](https://img.shields.io/github/license/keygenqt/yii2-share2)
![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-share2)

This is the Share2 widget and a Yii 2 enhanced wrapper for the Yandex [Block "Share"](https://tech.yandex.ru/share/).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-share2": "@dev"
}
```

of your `composer.json` file.

## Usage

```php
use keygenqt\share2\Share2;

<?= Share2::widget([
    
    'size' => 30,
    'margin' => 10,

    'icon_facebook' => Html::imgUrl('images/vendor/index/soc/fb.png'),
    'icon_gplus' => Html::imgUrl('images/vendor/index/soc/g.png'),
    'icon_twitter' => Html::imgUrl('images/vendor/index/soc/tw.png'),
    'icon_linkedin' => Html::imgUrl('images/vendor/index/soc/li.png'),

    'soc' => [Share2::SOC_FACEBOOK, Share2::SOC_TWITTER, Share2::SOC_GPLUS, Share2::SOC_LINKEDIN],

    'title' => 'Title page',
    'urlImage' => Html::imgUrl('images/image.png'),
    'urlPage' => Yii::$app->request->getUrl(),

]) ?>
```