<?php
/** @var EcraController $this */
/** @var Ecra $model */
$this->breadcrumbs=array(
	'Ecras'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Ecra::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Ecra::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Ecra::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
        'modelo_ecra',
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Casos de Uso do') . ' ' . Ecra::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'ecra-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Ecra($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'ecra',
            'value' => 'isset($data->ecra0) ? $data->ecra0 : null',
            'filter' => CHtml::listData(Ecra::model()->findAll(), 'id', Ecra::representingColumn()),
        ),
        array(
            'name' => 'caso_uso',
            'value' => 'isset($data->casoUso) ? $data->casoUso : null',
            'filter' => CHtml::listData(CasoUso::model()->findAll(), 'id', CasoUso::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}|{update}|{delete}',
            'viewButtonUrl' => 'array("ecraCaso/view",
            "id"=>$data->id)',
            'updateButtonUrl' => 'array("ecraCaso/update",
            "id"=>$data->id)',
            'deleteButtonUrl' => 'array("ecraCaso/delete",
            "id"=>$data->id)',
        ),
    ),
));
?>