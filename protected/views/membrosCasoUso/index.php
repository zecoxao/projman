<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Casos',
);

$this->menu=array(
	array('label'=>'Create Membros de Caso', 'url'=>array('create')),
	array('label'=>'Manage Membros de Caso', 'url'=>array('admin')),
);
?>

<h1>Membros de Casos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
