<?php
/* @var $this StakeholderController */
/* @var $model Stakeholder */

$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	$model->cod_stakeholder=>array('view','id'=>$model->cod_stakeholder),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stakeholder', 'url'=>array('index')),
	array('label'=>'Create Stakeholder', 'url'=>array('create')),
	array('label'=>'View Stakeholder', 'url'=>array('view', 'id'=>$model->cod_stakeholder)),
	array('label'=>'Manage Stakeholder', 'url'=>array('admin')),
);
?>

<h1>Update Stakeholder <?php echo $model->cod_stakeholder; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>