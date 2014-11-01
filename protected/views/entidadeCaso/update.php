<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Entidades de Casos'=>array('index'),
	'View'=>array('view', 'entidade'=>$model->entidade, 'caso_uso'=>$model->caso_uso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entidades de Caso', 'url'=>array('index')),
	array('label'=>'Create Entidades de Caso', 'url'=>array('create')),
	array('label'=>'View Entidades de Caso', 'url'=>array('view', 'entidade'=>$model->entidade, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Manage Entidades de Caso', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
