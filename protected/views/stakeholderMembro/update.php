<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Stakeholders de Membros'=>array('index'),
	'View'=>array('view', 'stakeholder'=>$model->stakeholder, 'membro'=>$model->membro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stakeholders de Membro', 'url'=>array('index')),
	array('label'=>'Create Stakeholders de Membro', 'url'=>array('create')),
	array('label'=>'View Stakeholders de Membro', 'url'=>array('view', 'stakeholder'=>$model->stakeholder, 'membro'=>$model->membro)),
	array('label'=>'Manage Stakeholders de Membro', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
