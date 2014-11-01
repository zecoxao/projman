<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Requisitos de Stakeholders'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Requisitos de Stakeholder', 'url'=>array('index')),
	array('label'=>'Create Requisitos de Stakeholder', 'url'=>array('create')),
	array('label'=>'Update Requisitos de Stakeholder', 'url'=>array('update', 'requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder)),
	array('label'=>'Delete Requisitos de Stakeholder', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requisitos de Stakeholder', 'url'=>array('admin')),
);
?>

<h1>View Requisitos de Stakeholder</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'requisito',
		'stakeholder',
	),
)); ?>
