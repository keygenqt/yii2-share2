<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace keygenqt\share2;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use \yii\helpers\Json;

class Share2 extends Widget
{
    /* not all: https://tech.yandex.ru/share/doc/dg/add-docpage/ */
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

    public $icon_ya_collections;
    public $icon_vk;
    public $icon_facebook;
    public $icon_gplus;
    public $icon_twitter;
    public $icon_linkedin;
    public $icon_viber;
    public $icon_whatsapp;
    public $icon_skype;
    public $icon_telegram;

    public $size = 24;
    public $margin = 10;

    public $title;
    public $urlImage;
    public $urlPage;
    public $lang = 'en';

    public $soc = ['facebook', 'twitter', 'gplus', 'linkedin'];
    public $jsOption = [];

    public function run()
    {
        ActiveAssets::register($this->getView());

        $js = [
            'theme' => [
                'services' => implode(',', $this->soc),
                'lang' => $this->lang
            ]
        ];

        foreach ($this->soc as $soc) {
            if ($this->title) {
                $js['contentByService'][$soc]['title'] = $this->title;
            }
            if ($this->urlImage) {
                $js['contentByService'][$soc]['image'] = $this->urlImage;
            }
            if ($this->urlPage) {
                $js['contentByService'][$soc]['url'] = $this->urlPage;
            }
        }

        $this->jsOption = Json::encode(ArrayHelper::merge($js, $this->jsOption));
        $this->getView()->registerJs("var share{$this->getId()} = Ya.share2('{$this->getId()}', {$this->jsOption});");

        return $this->getView()->render('@keygenqt/share2/views/view', ['widget' => $this]);
    }

    public function getIcons()
    {
        $icons = [];
        foreach ($this->soc as $soc) {
            $image = '';
            switch ($soc) {
                case self::SOC_YA_COLLECTIONS:
                    $image = $this->icon_ya_collections;
                break;
                case self::SOC_VK:
                    $image = $this->icon_vk;
                    break;
                case self::SOC_FACEBOOK:
                    $image = $this->icon_facebook;
                    break;
                case self::SOC_GPLUS:
                    $image = $this->icon_gplus;
                    break;
                case self::SOC_TWITTER:
                    $image = $this->icon_twitter;
                    break;
                case self::SOC_LINKEDIN:
                    $image = $this->icon_linkedin;
                    break;
                case self::SOC_VIBER:
                    $image = $this->icon_viber;
                    break;
                case self::SOC_WHATSAPP:
                    $image = $this->icon_whatsapp;
                    break;
                case self::SOC_SKYPE:
                    $image = $this->icon_skype;
                    break;
                case self::SOC_TELEGRAM:
                    $image = $this->icon_telegram;
                    break;
            }
            if ($image) {
                $icons[]['options']['style'] = "background-image: url($image)";
            }
        }
        if (!empty($icons)) {
            return \yii\widgets\Menu::widget([
                'encodeLabels' => false,
                'items' => $icons
            ]);
        }
    }
}



































