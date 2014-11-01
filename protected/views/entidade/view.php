<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->cod_entidade,
);

$this->menu=array(
	array('label'=>'List Entidade', 'url'=>array('index')),
	array('label'=>'Create Entidade', 'url'=>array('create')),
	array('label'=>'Update Entidade', 'url'=>array('update', 'id'=>$model->cod_entidade)),
	array('label'=>'Delete Entidade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_entidade),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entidade', 'url'=>array('admin')),
);
?>

<h1>View Entidade #<?php echo $model->cod_entidade; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_entidade',
		'nome',
		'descricao',
	),
)); ?>
