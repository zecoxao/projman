<?php
/* @var $this EcraController */
/* @var $model Ecra */

$this->breadcrumbs=array(
	'Ecras'=>array('index'),
	$model->cod_ecra=>array('view','id'=>$model->cod_ecra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ecra', 'url'=>array('index')),
	array('label'=>'Create Ecra', 'url'=>array('create')),
	array('label'=>'View Ecra', 'url'=>array('view', 'id'=>$model->cod_ecra)),
	array('label'=>'Manage Ecra', 'url'=>array('admin')),
);
?>

<h1>Update Ecra <?php echo $model->cod_ecra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>