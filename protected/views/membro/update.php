<?php
/* @var $this MembroController */
/* @var $model Membro */

$this->breadcrumbs=array(
	'Membros'=>array('index'),
	$model->cod_membro=>array('view','id'=>$model->cod_membro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Membro', 'url'=>array('index')),
	array('label'=>'Create Membro', 'url'=>array('create')),
	array('label'=>'View Membro', 'url'=>array('view', 'id'=>$model->cod_membro)),
	array('label'=>'Manage Membro', 'url'=>array('admin')),
);
?>

<h1>Update Membro <?php echo $model->cod_membro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>