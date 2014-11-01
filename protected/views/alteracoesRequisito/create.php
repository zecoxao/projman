<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Alteracoes a Requisitos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alteracoes a Requisitos', 'url'=>array('index')),
    array('label'=>'Manage Alteracoes a Requisito', 'url'=>array('admin')),
);
?>

<h1>Create Alteracoes a Requisito</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
