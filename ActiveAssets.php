<?php

namespace keygenqt\share2;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class ActiveAssets extends AssetBundle
{
	public $sourcePath = '@keygenqt/share2/assets';

	public $js = [
		'https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js',
		'https://yastatic.net/share2/share.js',
	];
}
