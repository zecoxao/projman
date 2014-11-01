<?php
/* @var $this ProjectoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projectos',
);

$this->menu=array(
	array('label'=>'Create Projecto', 'url'=>array('create')),
	array('label'=>'Manage Projecto', 'url'=>array('admin')),
);
?>

<h1>Projectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
