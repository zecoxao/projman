<?php
/* @var $this GrupoAnaliseController */
/* @var $model GrupoAnalise */

$this->breadcrumbs=array(
	'Grupo Analises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GrupoAnalise', 'url'=>array('index')),
	array('label'=>'Manage GrupoAnalise', 'url'=>array('admin')),
);
?>

<h1>Create GrupoAnalise</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>