<?php
/** @var ProjectoController $this */
/** @var Projecto $model */
$this->breadcrumbs=array(
	'Projectos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Projecto::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Projecto::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Projecto::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
        'data_inicio',
        'data_fim',
        'duracao',
        'ambito',
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Stakeholders do') . ' ' . Projecto::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Projecto($parentID),
    'columns' => array(
        'id',
        'descricao',
        array(
            'name' => 'grupo',
            'value' => 'isset($data->grupo0) ? $data->grupo0 : null',
            'filter' => CHtml::listData(Grupo::model()->findAll(), 'id', Grupo::representingColumn()),
        ),
        array(
            'name' => 'cliente',
            'value' => 'isset($data->cliente0) ? $data->cliente0 : null',
            'filter' => CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn()),
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

<legend><?php echo Yii::t('AweCrud.app', 'Requisitos do') . ' ' . Projecto::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_2->search_Projecto($parentID),
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

<legend><?php echo Yii::t('AweCrud.app', 'Membros do') . ' ' . Projecto::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'membro-projecto-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_3->search_Projecto($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'membro',
            'value' => 'isset($data->membro0) ? $data->membro0 : null',
            'filter' => CHtml::listData(Membro::model()->findAll(), 'id', Membro::representingColumn()),
        ),
        
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroProjecto/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroProjecto/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroProjecto/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroProjecto/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>