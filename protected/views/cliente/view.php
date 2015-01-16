<?php
/** @var ClienteController $this */
/** @var Cliente $model */
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Cliente::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Cliente::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Cliente::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
        array(
			'name'=>'pessoa',
			'value'=>($model->pessoa0 !== null) ? CHtml::link($model->pessoa0, array('/pessoa/view', 'id' => $model->pessoa0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Stakeholders do') . ' ' . Cliente::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Cliente($parentID),
    'columns' => array(
        'id',
        'descricao',
        array(
            'name' => 'grupo',
            'value' => 'isset($data->grupo0) ? $data->grupo0 : null',
            'filter' => CHtml::listData(Grupo::model()->findAll(), 'id', Grupo::representingColumn()),
        ),
        
        array(
            'name' => 'pessoa',
            'value' => 'isset($data->pessoa0) ? $data->pessoa0 : null',
            'filter' => CHtml::listData(Pessoa::model()->findAll(), 'id', Pessoa::representingColumn()),
        ),
        array(
            'name' => 'projecto',
            'value' => 'isset($data->projecto0) ? $data->projecto0 : null',
            'filter' => CHtml::listData(Projecto::model()->findAll(), 'id', Projecto::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholder/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholder/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholder/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholder/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>