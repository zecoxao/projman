<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Requisitos de Stakeholders'=>array('index'),
	'View'=>array('view', 'requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requisitos de Stakeholder', 'url'=>array('index')),
	array('label'=>'Create Requisitos de Stakeholder', 'url'=>array('create')),
	array('label'=>'View Requisitos de Stakeholder', 'url'=>array('view', 'requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder)),
	array('label'=>'Manage Requisitos de Stakeholder', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
