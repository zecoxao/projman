<?php
/** @var StakeholderController $this */
/** @var Stakeholder $model */
$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Stakeholder::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Stakeholder::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Stakeholder::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
        array(
			'name'=>'grupo',
			'value'=>($model->grupo0 !== null) ? CHtml::link($model->grupo0, array('/grupo/view', 'id' => $model->grupo0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'cliente',
			'value'=>($model->cliente0 !== null) ? CHtml::link($model->cliente0, array('/cliente/view', 'id' => $model->cliente0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'pessoa',
			'value'=>($model->pessoa0 !== null) ? CHtml::link($model->pessoa0, array('/pessoa/view', 'id' => $model->pessoa0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'projecto',
			'value'=>($model->projecto0 !== null) ? CHtml::link($model->projecto0, array('/projecto/view', 'id' => $model->projecto0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Alterações do') . ' ' . Stakeholder::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'alteracao-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Stakeholder($parentID),
    'columns' => array(
        'id',
        
        'data_alteracao',
        'descricao',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracao/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracao/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracao/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracao/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>

<legend><?php echo Yii::t('AweCrud.app', 'Requisitos do') . ' ' . Stakeholder::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'requisito-stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_2->search_Stakeholder($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'requisito',
            'value' => 'isset($data->requisito0) ? $data->requisito0 : null',
            'filter' => CHtml::listData(Requisito::model()->findAll(), 'id', Requisito::representingColumn()),
        ),
        
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisitoStakeholder/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisitoStakeholder/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisitoStakeholder/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("requisitoStakeholder/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>


<legend><?php echo Yii::t('AweCrud.app', 'Membros do') . ' ' . Stakeholder::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'stakeholder-membro-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_3->search_Stakeholder($parentID),
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
                    'url' => 'Yii::app()->createUrl("stakeholderMembro/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholderMembro/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholderMembro/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("stakeholderMembro/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>