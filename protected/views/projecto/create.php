<?php
/* @var $this ProjectoController */
/* @var $model Projecto */

$this->breadcrumbs=array(
	'Projectos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projecto', 'url'=>array('index')),
	array('label'=>'Manage Projecto', 'url'=>array('admin')),
);
?>

<h1>Create Projecto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>