<?php
/* @var $this StakeholderController */
/* @var $model Stakeholder */

$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	$model->cod_stakeholder,
);

$this->menu=array(
	array('label'=>'List Stakeholder', 'url'=>array('index')),
	array('label'=>'Create Stakeholder', 'url'=>array('create')),
	array('label'=>'Update Stakeholder', 'url'=>array('update', 'id'=>$model->cod_stakeholder)),
	array('label'=>'Delete Stakeholder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_stakeholder),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stakeholder', 'url'=>array('admin')),
);
?>

<h1>View Stakeholder #<?php echo $model->cod_stakeholder; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_stakeholder',
		'pessoa',
		'descricao',
		'grupo',
		'cliente',
	),
)); ?>
