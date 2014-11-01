<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entidade', 'url'=>array('index')),
	array('label'=>'Manage Entidade', 'url'=>array('admin')),
);
?>

<h1>Create Entidade</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>