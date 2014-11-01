<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Ecras de Casos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ecras de Casos', 'url'=>array('index')),
    array('label'=>'Manage Ecras de Caso', 'url'=>array('admin')),
);
?>

<h1>Create Ecras de Caso</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
