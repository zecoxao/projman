<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Projectos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List Membros de Projecto', 'url'=>array('index')),
	array('label'=>'Create Membros de Projecto', 'url'=>array('create')),
	array('label'=>'Update Membros de Projecto', 'url'=>array('update', 'projecto'=>$model->projecto, 'membro'=>$model->membro)),
	array('label'=>'Delete Membros de Projecto', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'projecto'=>$model->projecto, 'membro'=>$model->membro),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Membros de Projecto', 'url'=>array('admin')),
);
?>

<h1>View Membros de Projecto</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'projecto',
		'membro',
	),
)); ?>
