<?php
/* @var $this EcraController */
/* @var $model Ecra */

$this->breadcrumbs=array(
	'Ecras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ecra', 'url'=>array('index')),
	array('label'=>'Manage Ecra', 'url'=>array('admin')),
);
?>

<h1>Create Ecra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>