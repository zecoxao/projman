<?php
/** @var RequisitosController $this */
/** @var Requisitos $model */
$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	$model->cod_requisito,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Requisitos::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Requisitos::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->cod_requisito)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_requisito), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Requisitos::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'cod_requisito',
        array(
			'name'=>'projecto',
			'value'=>($model->projecto0 !== null) ? CHtml::link($model->projecto0, array('/projecto/view', 'cod_projecto' => $model->projecto0->cod_projecto)).' ' : null,
			'type'=>'html',
		),
        'descricao',
        array(
			'name'=>'estado',
			'value'=>($model->estado0 !== null) ? CHtml::link($model->estado0, array('/estado/view', 'cod_estado' => $model->estado0->cod_estado)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>