<?php
/* @var $this MembroController */
/* @var $model Membro */

$this->breadcrumbs=array(
	'Membros'=>array('index'),
	$model->cod_membro,
);

$this->menu=array(
	array('label'=>'List Membro', 'url'=>array('index')),
	array('label'=>'Create Membro', 'url'=>array('create')),
	array('label'=>'Update Membro', 'url'=>array('update', 'id'=>$model->cod_membro)),
	array('label'=>'Delete Membro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_membro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Membro', 'url'=>array('admin')),
);
?>

<h1>View Membro #<?php echo $model->cod_membro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_membro',
		'pessoa',
		'descricao',
	),
)); ?>
