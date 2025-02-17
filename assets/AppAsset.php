<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/main.css',
        'https://fonts.googleapis.com/css?family=Raleway|Roboto:300'
      //  'css/font-awesome.min.css',
     //   'css/main.css'
    ];
    public $js = [
    //    'js/handlebars.min-latest.js',
        'js/bootstrap.min.js',
        'js/scripts.js',        
    ];
   public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapPluginAsset',
    ];
}