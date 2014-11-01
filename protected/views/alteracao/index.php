<?php
/* @var $this AlteracaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alteracaos',
);

$this->menu=array(
	array('label'=>'Create Alteracao', 'url'=>array('create')),
	array('label'=>'Manage Alteracao', 'url'=>array('admin')),
);
?>

<h1>Alteracaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
