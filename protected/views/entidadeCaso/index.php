<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Entidades de Casos',
);

$this->menu=array(
	array('label'=>'Create Entidades de Caso', 'url'=>array('create')),
	array('label'=>'Manage Entidades de Caso', 'url'=>array('admin')),
);
?>

<h1>Entidades de Casos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
