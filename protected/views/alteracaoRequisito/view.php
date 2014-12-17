<?php
/** @var AlteracaoRequisitoController $this */
/** @var AlteracaoRequisito $model */
$this->breadcrumbs=array(
	'Alteracao Requisitos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . AlteracaoRequisito::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . AlteracaoRequisito::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . AlteracaoRequisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'alteracao',
			'value'=>($model->alteracao0 !== null) ? CHtml::link($model->alteracao0, array('/alteracao/view', 'id' => $model->alteracao0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'requisito',
			'value'=>($model->requisito0 !== null) ? CHtml::link($model->requisito0, array('/requisito/view', 'id' => $model->requisito0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>