<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	$model->cod_requisito,
);

$this->menu=array(
	array('label'=>'List Requisitos', 'url'=>array('index')),
	array('label'=>'Create Requisitos', 'url'=>array('create')),
	array('label'=>'Update Requisitos', 'url'=>array('update', 'id'=>$model->cod_requisito)),
	array('label'=>'Delete Requisitos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_requisito),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>View Requisitos #<?php echo $model->cod_requisito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_requisito',
		'projecto',
		'descricao',
		'estado',
	),
)); ?>
