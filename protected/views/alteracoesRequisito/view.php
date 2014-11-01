<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Alteracoes a Requisitos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Alteracoes a Requisito', 'url'=>array('index')),
	array('label'=>'Create Alteracoes a Requisito', 'url'=>array('create')),
	array('label'=>'Update Alteracoes a Requisito', 'url'=>array('update', 'alteracao'=>$model->alteracao, 'requisito'=>$model->requisito)),
	array('label'=>'Delete Alteracoes a Requisito', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'alteracao'=>$model->alteracao, 'requisito'=>$model->requisito),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alteracoes a Requisito', 'url'=>array('admin')),
);
?>

<h1>View Alteracoes a Requisito</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'alteracao',
		'requisito',
	),
)); ?>
