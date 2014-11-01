<?php
/* @var $this ProjectoController */
/* @var $model Projecto */

$this->breadcrumbs=array(
	'Projectos'=>array('index'),
	$model->cod_projecto=>array('view','id'=>$model->cod_projecto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projecto', 'url'=>array('index')),
	array('label'=>'Create Projecto', 'url'=>array('create')),
	array('label'=>'View Projecto', 'url'=>array('view', 'id'=>$model->cod_projecto)),
	array('label'=>'Manage Projecto', 'url'=>array('admin')),
);
?>

<h1>Update Projecto <?php echo $model->cod_projecto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>