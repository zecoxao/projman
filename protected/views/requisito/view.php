<?php
/** @var RequisitoController $this */
/** @var Requisito $model */
$this->breadcrumbs=array(
	'Requisitos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Requisito::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Requisito::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Requisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'projecto',
			'value'=>($model->projecto0 !== null) ? CHtml::link($model->projecto0, array('/projecto/view', 'id' => $model->projecto0->id)).' ' : null,
			'type'=>'html',
		),
        'descricao',
        array(
			'name'=>'estado',
			'value'=>($model->estado0 !== null) ? CHtml::link($model->estado0, array('/estado/view', 'id' => $model->estado0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>