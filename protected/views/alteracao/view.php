<?php
/* @var $this AlteracaoController */
/* @var $model Alteracao */

$this->breadcrumbs=array(
	'Alteracaos'=>array('index'),
	$model->cod_alteracao,
);

$this->menu=array(
	array('label'=>'List Alteracao', 'url'=>array('index')),
	array('label'=>'Create Alteracao', 'url'=>array('create')),
	array('label'=>'Update Alteracao', 'url'=>array('update', 'id'=>$model->cod_alteracao)),
	array('label'=>'Delete Alteracao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_alteracao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alteracao', 'url'=>array('admin')),
);
?>

<h1>View Alteracao #<?php echo $model->cod_alteracao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_alteracao',
		'stakeholder',
		'data_alteracao',
		'descricao',
	),
)); ?>
