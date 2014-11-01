<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Ecras de Casos'=>array('index'),
	'View'=>array('view', 'ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ecras de Caso', 'url'=>array('index')),
	array('label'=>'Create Ecras de Caso', 'url'=>array('create')),
	array('label'=>'View Ecras de Caso', 'url'=>array('view', 'ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Manage Ecras de Caso', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
