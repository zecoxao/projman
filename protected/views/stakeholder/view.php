<?php
/** @var StakeholderController $this */
/** @var Stakeholder $model */
$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	$model->cod_stakeholder,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Stakeholder::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Stakeholder::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->cod_stakeholder)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_stakeholder), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Stakeholder::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'cod_stakeholder',
        'descricao',
        array(
			'name'=>'grupo',
			'value'=>($model->grupo0 !== null) ? CHtml::link($model->grupo0, array('/grupoAnalise/view', 'cod_grupo' => $model->grupo0->cod_grupo)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'cliente',
			'value'=>($model->cliente0 !== null) ? CHtml::link($model->cliente0, array('/cliente/view', 'cod_cliente' => $model->cliente0->cod_cliente)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'pessoa',
			'value'=>($model->pessoa0 !== null) ? CHtml::link($model->pessoa0, array('/pessoa/view', 'cod_pessoa' => $model->pessoa0->cod_pessoa)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>