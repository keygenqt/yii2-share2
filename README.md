Yii2 Share2
===================

![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-share2?label=Packagist%20Downloads)

An easy way to add buttons soc network share. Widget uses the Yandex [Block "Share"](https://tech.yandex.ru/share/).

<p>
    <a href="https://old.keygenqt.com/work/yii2-share2">
        <img src="data/demo_button.gif" width="136px"/>
    </a>
</p>

#### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
"require": {
    "keygenqt/yii2-share2": "*"
}
```

#### Usage

```php
use keygenqt\share2\Share2;

<?= Share2::widget([
    'size' => 40,
    'margin' => 10,
    'lang' => 'en',

    'icon_facebook' => '/images/common/fb.png',
    'icon_twitter' => '/images/common/tw.png',
    'icon_linkedin' => '/images/common/in.png',

    'soc' => [Share2::SOC_FACEBOOK, Share2::SOC_TWITTER, Share2::SOC_LINKEDIN],

    'title' => 'Yii2 Share',
    'urlImage' => Url::base(true) . '/images/yii2/preview-share2.png',
    'urlPage' => Url::base(true) . Yii::$app->request->getUrl(),

]) ?>
```

#### FYI

I did not overload all the options, there are a lot of them. Only the most basic. You can find all parameters 
[here](https://tech.yandex.ru/share/doc/dg/add-docpage/)

#### Options

```php
const SOC_YA_COLLECTIONS = 'collections';
const SOC_VK = 'vkontakte';
const SOC_FACEBOOK = 'facebook';
const SOC_GPLUS = 'gplus';
const SOC_TWITTER = 'twitter';
const SOC_LINKEDIN = 'linkedin';
const SOC_VIBER = 'viber';
const SOC_WHATSAPP = 'whatsapp';
const SOC_SKYPE = 'skype';
const SOC_TELEGRAM = 'telegram';
```

Some social networks do not pay attention to the image parameter passed to them. In this case, [micro-marking](https://developer.mozilla.org/en-US/docs/Web/HTML/microformats) should be used.

#### License

```
Copyright 2017-2024 Vitaliy Zarubin

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
