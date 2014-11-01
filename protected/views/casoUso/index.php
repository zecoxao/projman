<?php
/* @var $this CasoUsoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caso Usos',
);

$this->menu=array(
	array('label'=>'Create CasoUso', 'url'=>array('create')),
	array('label'=>'Manage CasoUso', 'url'=>array('admin')),
);
?>

<h1>Caso Usos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
