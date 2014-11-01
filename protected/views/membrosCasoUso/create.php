<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Casos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Membros de Casos', 'url'=>array('index')),
    array('label'=>'Manage Membros de Caso', 'url'=>array('admin')),
);
?>

<h1>Create Membros de Caso</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
