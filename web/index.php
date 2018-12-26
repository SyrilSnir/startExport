<?php
    use yii\web\Application;
    define('YII_DEBUG', true);
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
    if (YII_DEBUG === true) {
        $config = require __DIR__  . '/../config/web-debug.php';   
    } else {
            $config = require __DIR__  . '/../config/web.php'; 
    }
    (new Application($config))->run();
    //echo 'StartExport';
?>