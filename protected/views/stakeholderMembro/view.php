<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Stakeholders de Membros'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Stakeholders de Membro', 'url'=>array('index')),
	array('label'=>'Create Stakeholders de Membro', 'url'=>array('create')),
	array('label'=>'Update Stakeholders de Membro', 'url'=>array('update', 'stakeholder'=>$model->stakeholder, 'membro'=>$model->membro)),
	array('label'=>'Delete Stakeholders de Membro', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'stakeholder'=>$model->stakeholder, 'membro'=>$model->membro),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stakeholders de Membro', 'url'=>array('admin')),
);
?>

<h1>View Stakeholders de Membro</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stakeholder',
		'membro',
	),
)); ?>
