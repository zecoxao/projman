<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Ecras de Casos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Ecras de Caso', 'url'=>array('index')),
	array('label'=>'Create Ecras de Caso', 'url'=>array('create')),
	array('label'=>'Update Ecras de Caso', 'url'=>array('update', 'ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Delete Ecras de Caso', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ecras de Caso', 'url'=>array('admin')),
);
?>

<h1>View Ecras de Caso</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ecra',
		'caso_uso',
	),
)); ?>
