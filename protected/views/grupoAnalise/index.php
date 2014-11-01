<?php
/* @var $this GrupoAnaliseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupo Analises',
);

$this->menu=array(
	array('label'=>'Create GrupoAnalise', 'url'=>array('create')),
	array('label'=>'Manage GrupoAnalise', 'url'=>array('admin')),
);
?>

<h1>Grupo Analises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
