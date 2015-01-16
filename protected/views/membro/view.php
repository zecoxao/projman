<?php
/** @var MembroController $this */
/** @var Membro $model */
$this->breadcrumbs=array(
	'Membros'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Membro::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Membro::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Membro::label(); ?> <?php echo CHtml::encode($model) ?></legend>

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

<legend><?php echo Yii::t('AweCrud.app', 'Casos de Uso do') . ' ' . Membro::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'membro-caso-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Membro($parentID),
    'columns' => array(
        'id',
        
        array(
            'name' => 'caso_uso',
            'value' => 'isset($data->casoUso) ? $data->casoUso : null',
            'filter' => CHtml::listData(CasoUso::model()->findAll(), 'id', CasoUso::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroCaso/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroCaso/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroCaso/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("membroCaso/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>

<legend><?php echo Yii::t('AweCrud.app', 'Projectos do') . ' ' . Membro::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'membro-projecto-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_2->search_Membro($parentID),
    'columns' => array(
        'id',
       
        
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

<legend><?php echo Yii::t('AweCrud.app', 'Stakeholders do') . ' ' . Membro::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'stakeholder-membro-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_3->search_Membro($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'stakeholder',
            'value' => 'isset($data->stakeholder0) ? $data->stakeholder0 : null',
            'filter' => CHtml::listData(Stakeholder::model()->findAll(), 'id', Stakeholder::representingColumn()),
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