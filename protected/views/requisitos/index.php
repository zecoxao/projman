<?php
/* @var $this RequisitosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Requisitoses',
);

$this->menu=array(
	array('label'=>'Create Requisitos', 'url'=>array('create')),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>Requisitoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
