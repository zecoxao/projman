<?php
$currController 	= Yii::app()->controller->id;
$currControllers	= explode('/', $currController);
$currAction			= Yii::app()->controller->action->id;
$currRoute 			= Yii::app()->controller->getRoute();
$currRoutes			= explode('/', $currRoute);

$menu=array();
if(in_array($currAction,array('index','view','create','update','admin','calendar','import')))
$menu[]=array('label'=>'List Cliente','url'=>array('index'),'icon'=>'fa fa-list-ol','active'=>($currAction=='index')?true:false);

if(in_array($currAction,array('index','view','create','update','admin','calendar','import')))
$menu[]=array('label'=>'Create Cliente','url'=>array('create'),'icon'=>'fa fa-plus-circle','active'=>($currAction=='create')?true:false);

if(in_array($currAction,array('index','view','create','update','admin','calendar','import')))
$menu[]=array('label'=>'Manage Cliente','url'=>array('admin'),'icon'=>'fa fa-tasks','active'=>($currAction=='admin')?true:false);

