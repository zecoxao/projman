<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "root";

$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if( mysqli_query($link, "USE $dbname") == FALSE){
	mysqli_close($link);
	

	$link = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_query($link, "CREATE DATABASE $dbname");
	mysqli_close($link);
	$file =dirname(__FILE__).'\\'.'bd.sql';
	$mySQLDir='"C:\\xampp\\mysql\\bin\\mysql.exe"';



	if ($dbpass != '') {
		$cmd = $mySQLDir.' -h '.$dbhost.' --user='.$dbuser.' --password='.$dbpass.' --database='.$dbname.' < "'.$file.'"';

	} else {
		$cmd = $mySQLDir.' -h '.$dbhost.' --user='.$dbuser.' < "'.$file.'"';
	}

	exec($cmd,$out,$retval);
}

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
