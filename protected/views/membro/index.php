<?php
/* @var $this MembroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Membros',
);

$this->menu=array(
	array('label'=>'Create Membro', 'url'=>array('create')),
	array('label'=>'Manage Membro', 'url'=>array('admin')),
);
?>

<h1>Membros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
