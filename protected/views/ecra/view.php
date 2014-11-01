<?php
/* @var $this EcraController */
/* @var $model Ecra */

$this->breadcrumbs=array(
	'Ecras'=>array('index'),
	$model->cod_ecra,
);

$this->menu=array(
	array('label'=>'List Ecra', 'url'=>array('index')),
	array('label'=>'Create Ecra', 'url'=>array('create')),
	array('label'=>'Update Ecra', 'url'=>array('update', 'id'=>$model->cod_ecra)),
	array('label'=>'Delete Ecra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_ecra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ecra', 'url'=>array('admin')),
);
?>

<h1>View Ecra #<?php echo $model->cod_ecra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_ecra',
		'descricao',
		'modelo_ecra',
	),
)); ?>
