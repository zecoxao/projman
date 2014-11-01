<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Entidades de Casos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entidades de Casos', 'url'=>array('index')),
    array('label'=>'Manage Entidades de Caso', 'url'=>array('admin')),
);
?>

<h1>Create Entidades de Caso</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
