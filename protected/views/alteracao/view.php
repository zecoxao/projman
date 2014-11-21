<?php
/** @var AlteracaoController $this */
/** @var Alteracao $model */
$this->breadcrumbs=array(
	'Alteracaos'=>array('index'),
	$model->cod_alteracao,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Alteracao::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Alteracao::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->cod_alteracao)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_alteracao), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Alteracao::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'cod_alteracao',
        array(
			'name'=>'stakeholder',
			'value'=>($model->stakeholder0 !== null) ? CHtml::link($model->stakeholder0, array('/stakeholder/view', 'cod_stakeholder' => $model->stakeholder0->cod_stakeholder)).' ' : null,
			'type'=>'html',
		),
        'data_alteracao',
        'descricao',
	),
)); ?>
</fieldset>