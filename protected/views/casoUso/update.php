<?php
/* @var $this CasoUsoController */
/* @var $model CasoUso */

$this->breadcrumbs=array(
	'Caso Usos'=>array('index'),
	$model->cod_caso_uso=>array('view','id'=>$model->cod_caso_uso),
	'Update',
);

$this->menu=array(
	array('label'=>'List CasoUso', 'url'=>array('index')),
	array('label'=>'Create CasoUso', 'url'=>array('create')),
	array('label'=>'View CasoUso', 'url'=>array('view', 'id'=>$model->cod_caso_uso)),
	array('label'=>'Manage CasoUso', 'url'=>array('admin')),
);
?>

<h1>Update CasoUso <?php echo $model->cod_caso_uso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>