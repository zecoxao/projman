<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Alteracoes a Requisitos',
);

$this->menu=array(
	array('label'=>'Create Alteracoes a Requisito', 'url'=>array('create')),
	array('label'=>'Manage Alteracoes a Requisito', 'url'=>array('admin')),
);
?>

<h1>Alteracoes a Requisitos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
