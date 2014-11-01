<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Stakeholders de Membros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stakeholders de Membros', 'url'=>array('index')),
    array('label'=>'Manage Stakeholders de Membro', 'url'=>array('admin')),
);
?>

<h1>Create Stakeholders de Membro</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
