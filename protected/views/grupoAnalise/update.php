<?php
/* @var $this GrupoAnaliseController */
/* @var $model GrupoAnalise */

$this->breadcrumbs=array(
	'Grupo Analises'=>array('index'),
	$model->cod_grupo=>array('view','id'=>$model->cod_grupo),
	'Update',
);

$this->menu=array(
	array('label'=>'List GrupoAnalise', 'url'=>array('index')),
	array('label'=>'Create GrupoAnalise', 'url'=>array('create')),
	array('label'=>'View GrupoAnalise', 'url'=>array('view', 'id'=>$model->cod_grupo)),
	array('label'=>'Manage GrupoAnalise', 'url'=>array('admin')),
);
?>

<h1>Update GrupoAnalise <?php echo $model->cod_grupo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>