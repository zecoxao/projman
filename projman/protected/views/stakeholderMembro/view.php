<?php
/** @var StakeholderMembroController $this */
/** @var StakeholderMembro $model */
$this->breadcrumbs=array(
	'Stakeholder Membros'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . StakeholderMembro::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . StakeholderMembro::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . StakeholderMembro::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'stakeholder',
			'value'=>($model->stakeholder0 !== null) ? CHtml::link($model->stakeholder0, array('/stakeholder/view', 'id' => $model->stakeholder0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'membro',
			'value'=>($model->membro0 !== null) ? CHtml::link($model->membro0, array('/membro/view', 'id' => $model->membro0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>