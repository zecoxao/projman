<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Projectos'=>array('index'),
	'View'=>array('view', 'projecto'=>$model->projecto, 'membro'=>$model->membro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Membros de Projecto', 'url'=>array('index')),
	array('label'=>'Create Membros de Projecto', 'url'=>array('create')),
	array('label'=>'View Membros de Projecto', 'url'=>array('view', 'projecto'=>$model->projecto, 'membro'=>$model->membro)),
	array('label'=>'Manage Membros de Projecto', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
