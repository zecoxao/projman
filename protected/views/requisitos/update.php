<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	$model->cod_requisito=>array('view','id'=>$model->cod_requisito),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requisitos', 'url'=>array('index')),
	array('label'=>'Create Requisitos', 'url'=>array('create')),
	array('label'=>'View Requisitos', 'url'=>array('view', 'id'=>$model->cod_requisito)),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>Update Requisitos <?php echo $model->cod_requisito; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>