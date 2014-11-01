<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Casos'=>array('index'),
	'View'=>array('view', 'membro'=>$model->membro, 'caso_uso'=>$model->caso_uso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Membros de Caso', 'url'=>array('index')),
	array('label'=>'Create Membros de Caso', 'url'=>array('create')),
	array('label'=>'View Membros de Caso', 'url'=>array('view', 'membro'=>$model->membro, 'caso_uso'=>$model->caso_uso)),
	array('label'=>'Manage Membros de Caso', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
