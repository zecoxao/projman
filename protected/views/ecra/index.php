<?php
/* @var $this EcraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ecras',
);

$this->menu=array(
	array('label'=>'Create Ecra', 'url'=>array('create')),
	array('label'=>'Manage Ecra', 'url'=>array('admin')),
);
?>

<h1>Ecras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
