<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Requisitos de Stakeholders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Requisitos de Stakeholders', 'url'=>array('index')),
    array('label'=>'Manage Requisitos de Stakeholder', 'url'=>array('admin')),
);
?>

<h1>Create Requisitos de Stakeholder</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
