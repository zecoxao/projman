<?php
/** @var EcraCasoController $this */
/** @var EcraCaso $model */
$this->breadcrumbs=array(
	'Ecra Casos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . EcraCaso::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . EcraCaso::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . EcraCaso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'ecra',
			'value'=>($model->ecra0 !== null) ? CHtml::link($model->ecra0, array('/ecra/view', 'id' => $model->ecra0->id)).' ' : null,
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