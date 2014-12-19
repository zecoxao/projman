<?php
/** @var CasoUsoController $this */
/** @var CasoUso $model */
$this->breadcrumbs=array(
	'Caso Usos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CasoUso::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CasoUso::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'nome',
        'dominio',
        'nivel',
        'actor_primario',
        'pre_condicao',
        'iniciador',
        'cenario_sucesso',
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Ecras do') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'ecra-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Caso($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'ecra',
            'value' => 'isset($data->ecra0) ? $data->ecra0 : null',
            'filter' => CHtml::listData(Ecra::model()->findAll(), 'id', Ecra::representingColumn()),
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

<legend><?php echo Yii::t('AweCrud.app', 'Entidades do') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'entidade-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_2->search_Caso($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'entidade',
            'value' => 'isset($data->entidade0) ? $data->entidade0 : null',
            'filter' => CHtml::listData(Entidade::model()->findAll(), 'id', Entidade::representingColumn()),
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

<legend><?php echo Yii::t('AweCrud.app', 'Membros do') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'membro-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_3->search_Caso($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'membro',
            'value' => 'isset($data->membro0) ? $data->membro0 : null',
            'filter' => CHtml::listData(Membro::model()->findAll(), 'id', Membro::representingColumn()),
        ),
        
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}|{update}|{delete}',
            'viewButtonUrl' => 'array("membroCaso/view",
            "id"=>$data->id)',
            'updateButtonUrl' => 'array("membroCaso/update",
            "id"=>$data->id)',
            'deleteButtonUrl' => 'array("membroCaso/delete",
            "id"=>$data->id)',
        ),
    ),
));
?>