<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->cod_estado,
);

$this->menu=array(
	array('label'=>'List Estado', 'url'=>array('index')),
	array('label'=>'Create Estado', 'url'=>array('create')),
	array('label'=>'Update Estado', 'url'=>array('update', 'id'=>$model->cod_estado)),
	array('label'=>'Delete Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_estado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estado', 'url'=>array('admin')),
);
?>

<h1>View Estado #<?php echo $model->cod_estado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_estado',
		'descricao',
	),
)); ?>
