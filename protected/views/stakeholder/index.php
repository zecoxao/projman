<?php
/* @var $this StakeholderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stakeholders',
);

$this->menu=array(
	array('label'=>'Create Stakeholder', 'url'=>array('create')),
	array('label'=>'Manage Stakeholder', 'url'=>array('admin')),
);
?>

<h1>Stakeholders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
