<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Ecras de Casos',
);

$this->menu=array(
	array('label'=>'Create Ecras de Caso', 'url'=>array('create')),
	array('label'=>'Manage Ecras de Caso', 'url'=>array('admin')),
);
?>

<h1>Ecras de Casos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
