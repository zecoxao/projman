<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Projectos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Membros de Projectos', 'url'=>array('index')),
    array('label'=>'Manage Membros de Projecto', 'url'=>array('admin')),
);
?>

<h1>Create Membros de Projecto</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
