<?php
/* @var $this StakeholderController */
/* @var $model Stakeholder */

$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stakeholder', 'url'=>array('index')),
	array('label'=>'Manage Stakeholder', 'url'=>array('admin')),
);
?>

<h1>Create Stakeholder</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>