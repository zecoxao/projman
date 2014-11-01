<?php
/* @var $this CasoUsoController */
/* @var $model CasoUso */

$this->breadcrumbs=array(
	'Caso Usos'=>array('index'),
	$model->cod_caso_uso,
);

$this->menu=array(
	array('label'=>'List CasoUso', 'url'=>array('index')),
	array('label'=>'Create CasoUso', 'url'=>array('create')),
	array('label'=>'Update CasoUso', 'url'=>array('update', 'id'=>$model->cod_caso_uso)),
	array('label'=>'Delete CasoUso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_caso_uso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CasoUso', 'url'=>array('admin')),
);
?>

<h1>View CasoUso #<?php echo $model->cod_caso_uso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_caso_uso',
		'nome',
		'dominio',
		'nivel',
		'actor_primario',
		'pre_condicao',
		'iniciador',
		'cenario_sucesso',
	),
)); ?>
