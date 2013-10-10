<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\config;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = array(
		'css/site.css',
		// 'css/main.css',
	);
	public $js = array(
		// 'js/jquery-1.7.2.min.js',
		// 'js/jquery-ui-1.8.21.custom.min.js',
		// 'js/myHint.js',
		// 'js/main.js',
		// 'js/pomodoro-min.js',
		// 'js/pomodoro-slider.js',
	);
	public $depends = array(
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	);
}
