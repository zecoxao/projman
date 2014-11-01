<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Entidades de Casos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Entidades de Caso', 'url'=>array('index')),
	array('label'=>'Create Entidades de Caso', 'url'=>array('create')),
	array('label'=>'Update Entidades de Caso', 'url'=>array('update', 'entidade'=>$model->entidade, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Delete Entidades de Caso', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'entidade'=>$model->entidade, 'caso_uso'=>$model->caso_uso),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entidades de Caso', 'url'=>array('admin')),
);
?>

<h1>View Entidades de Caso</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'entidade',
		'caso_uso',
	),
)); ?>
