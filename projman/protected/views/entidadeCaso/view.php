<?php
/** @var EntidadeCasoController $this */
/** @var EntidadeCaso $model */
$this->breadcrumbs=array(
	'Entidade Casos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . EntidadeCaso::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . EntidadeCaso::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . EntidadeCaso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'entidade',
			'value'=>($model->entidade0 !== null) ? CHtml::link($model->entidade0, array('/entidade/view', 'id' => $model->entidade0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'caso_uso',
			'value'=>($model->casoUso !== null) ? CHtml::link($model->casoUso, array('/casoUso/view', 'id' => $model->casoUso->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>

