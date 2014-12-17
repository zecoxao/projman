<?php
/** @var EntidadeController $this */
/** @var Entidade $model */
$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Entidade::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Entidade::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Entidade::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'nome',
        'descricao',
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Casos de Uso da') . ' ' . Entidade::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'entidade-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Entidade($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'entidade',
            'value' => 'isset($data->entidade0) ? $data->entidade0 : null',
            'filter' => CHtml::listData(Entidade::model()->findAll(), 'id', Entidade::representingColumn()),
        ),
        array(
            'name' => 'caso_uso',
            'value' => 'isset($data->casoUso) ? $data->casoUso : null',
            'filter' => CHtml::listData(CasoUso::model()->findAll(), 'id', CasoUso::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}|{update}|{delete}',
            'viewButtonUrl' => 'array("entidadeCaso/view",
            "id"=>$data->id)',
            'updateButtonUrl' => 'array("entidadeCaso/update",
            "id"=>$data->id)',
            'deleteButtonUrl' => 'array("entidadeCaso/delete",
            "id"=>$data->id)',
        ),
    ),
));
?>