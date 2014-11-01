<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Casos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Membros de Caso', 'url'=>array('index')),
	array('label'=>'Create Membros de Caso', 'url'=>array('create')),
	array('label'=>'Update Membros de Caso', 'url'=>array('update', 'membro'=>$model->membro, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Delete Membros de Caso', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'membro'=>$model->membro, 'caso_uso'=>$model->caso_uso),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Membros de Caso', 'url'=>array('admin')),
);
?>

<h1>View Membros de Caso</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'membro',
		'caso_uso',
	),
)); ?>
