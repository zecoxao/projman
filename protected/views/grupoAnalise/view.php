<?php
/* @var $this GrupoAnaliseController */
/* @var $model GrupoAnalise */

$this->breadcrumbs=array(
	'Grupo Analises'=>array('index'),
	$model->cod_grupo,
);

$this->menu=array(
	array('label'=>'List GrupoAnalise', 'url'=>array('index')),
	array('label'=>'Create GrupoAnalise', 'url'=>array('create')),
	array('label'=>'Update GrupoAnalise', 'url'=>array('update', 'id'=>$model->cod_grupo)),
	array('label'=>'Delete GrupoAnalise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_grupo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GrupoAnalise', 'url'=>array('admin')),
);
?>

<h1>View GrupoAnalise #<?php echo $model->cod_grupo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_grupo',
		'descricao',
	),
)); ?>
