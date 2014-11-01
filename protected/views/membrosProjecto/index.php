<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Projectos',
);

$this->menu=array(
	array('label'=>'Create Membros de Projecto', 'url'=>array('create')),
	array('label'=>'Manage Membros de Projecto', 'url'=>array('admin')),
);
?>

<h1>Membros de Projectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
