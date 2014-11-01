<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Requisitos de Stakeholders',
);

$this->menu=array(
	array('label'=>'Create Requisitos de Stakeholder', 'url'=>array('create')),
	array('label'=>'Manage Requisitos de Stakeholder', 'url'=>array('admin')),
);
?>

<h1>Requisitos de Stakeholders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
