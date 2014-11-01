<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Alteracoes a Requisitos'=>array('index'),
	'View'=>array('view', 'alteracao'=>$model->alteracao, 'requisito'=>$model->requisito),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alteracoes a Requisito', 'url'=>array('index')),
	array('label'=>'Create Alteracoes a Requisito', 'url'=>array('create')),
	array('label'=>'View Alteracoes a Requisito', 'url'=>array('view', 'alteracao'=>$model->alteracao, 'requisito'=>$model->requisito)),
	array('label'=>'Manage Alteracoes a Requisito', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
