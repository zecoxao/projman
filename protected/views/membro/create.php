<?php
/* @var $this MembroController */
/* @var $model Membro */

$this->breadcrumbs=array(
	'Membros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Membro', 'url'=>array('index')),
	array('label'=>'Manage Membro', 'url'=>array('admin')),
);
?>

<h1>Create Membro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>