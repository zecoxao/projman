<?php
/* @var $this ProjectoController */
/* @var $model Projecto */

$this->breadcrumbs=array(
	'Projectos'=>array('index'),
	$model->cod_projecto,
);

$this->menu=array(
	array('label'=>'List Projecto', 'url'=>array('index')),
	array('label'=>'Create Projecto', 'url'=>array('create')),
	array('label'=>'Update Projecto', 'url'=>array('update', 'id'=>$model->cod_projecto)),
	array('label'=>'Delete Projecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_projecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projecto', 'url'=>array('admin')),
);
?>

<h1>View Projecto #<?php echo $model->cod_projecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_projecto',
		'descricao',
		'data_inicio',
		'data_fim',
		'duracao',
		'ambito',
	),
)); ?>
