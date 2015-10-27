<?php
/** @var EstadoController $this */
/** @var Estado $model */
$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Estado::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Estado::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Estado::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Requisitos do') . ' ' . Estado::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Estado($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'projecto',
            'value' => 'isset($data->projecto0) ? $data->projecto0 : null',
            'filter' => CHtml::listData(Projecto::model()->findAll(), 'id', Projecto::representingColumn()),
        ),
        'descricao',
        array(
            'name' => 'estado',
            'value' => 'isset($data->estado0) ? $data->estado0 : null',
            'filter' => CHtml::listData(Estado::model()->findAll(), 'id', Estado::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
           'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisito/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisito/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisito/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisito/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>