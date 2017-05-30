<?php

namespace keygenqt\share2;

use yii\helpers\Url;
use yii\widgets\InputWidget;

class Share2 extends Widget
{

    public function run()
    {
        return $this->getView()->render('@keygenqt/share2/views/view', ['widget' => $this]);
    }
}