<?php

$local = true;

define('YII_DEBUG',true);
define('DS', DIRECTORY_SEPARATOR);

require_once(dirname(__FILE__).'/../yii1117/yii.php');
if($local)
	$config = dirname(__FILE__).'/protected/config/main-local.php';
else
	$config = dirname(__FILE__).'/protected/config/main.php';
// create a Web application instance and run
Yii::createWebApplication($config)->run();