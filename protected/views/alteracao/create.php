<?php
/* @var $this AlteracaoController */
/* @var $model Alteracao */

$this->breadcrumbs=array(
	'Alteracaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alteracao', 'url'=>array('index')),
	array('label'=>'Manage Alteracao', 'url'=>array('admin')),
);
?>

<h1>Create Alteracao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>