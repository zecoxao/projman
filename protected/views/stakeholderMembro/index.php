<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Stakeholders de Membros',
);

$this->menu=array(
	array('label'=>'Create Stakeholders de Membro', 'url'=>array('create')),
	array('label'=>'Manage Stakeholders de Membro', 'url'=>array('admin')),
);
?>

<h1>Stakeholders de Membros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
