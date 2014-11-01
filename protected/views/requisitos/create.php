<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Requisitos', 'url'=>array('index')),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>Create Requisitos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>