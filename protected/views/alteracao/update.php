<?php
/* @var $this AlteracaoController */
/* @var $model Alteracao */

$this->breadcrumbs=array(
	'Alteracaos'=>array('index'),
	$model->cod_alteracao=>array('view','id'=>$model->cod_alteracao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alteracao', 'url'=>array('index')),
	array('label'=>'Create Alteracao', 'url'=>array('create')),
	array('label'=>'View Alteracao', 'url'=>array('view', 'id'=>$model->cod_alteracao)),
	array('label'=>'Manage Alteracao', 'url'=>array('admin')),
);
?>

<h1>Update Alteracao <?php echo $model->cod_alteracao; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>