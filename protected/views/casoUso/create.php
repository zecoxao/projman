<?php
/* @var $this CasoUsoController */
/* @var $model CasoUso */

$this->breadcrumbs=array(
	'Caso Usos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CasoUso', 'url'=>array('index')),
	array('label'=>'Manage CasoUso', 'url'=>array('admin')),
);
?>

<h1>Create CasoUso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>