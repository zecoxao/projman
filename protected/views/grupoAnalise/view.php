<?php
/** @var GrupoanaliseController $this */
/** @var GrupoAnalise $model */
$this->breadcrumbs=array(
	'Grupo Analises'=>array('index'),
	$model->cod_grupo,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . GrupoAnalise::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . GrupoAnalise::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->cod_grupo)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_grupo), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . GrupoAnalise::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'cod_grupo',
        'descricao',
	),
)); ?>
</fieldset>