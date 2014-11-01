<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->cod_entidade=>array('view','id'=>$model->cod_entidade),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entidade', 'url'=>array('index')),
	array('label'=>'Create Entidade', 'url'=>array('create')),
	array('label'=>'View Entidade', 'url'=>array('view', 'id'=>$model->cod_entidade)),
	array('label'=>'Manage Entidade', 'url'=>array('admin')),
);
?>

<h1>Update Entidade <?php echo $model->cod_entidade; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>