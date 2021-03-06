<?php
/** @var RequisitoController $this */
/** @var Requisito $model */
$this->breadcrumbs = array(
    'Requisitos' => array('index'),
    $model->id,
);

$this->menu = array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Requisito::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Requisito::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Requisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            array(
                'name' => 'projecto',
                'value' => ($model->projecto0 !== null) ? CHtml::link($model->projecto0, array('/projecto/view', 'id' => $model->projecto0->id)) . ' ' : null,
                'type' => 'html',
            ),
            'descricao',
            array(
                'name' => 'estado',
                'value' => ($model->estado0 !== null) ? CHtml::link($model->estado0, array('/estado/view', 'id' => $model->estado0->id)) . ' ' : null,
                'type' => 'html',
            ),
        ),
    ));
    ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Alteracoes do') . ' ' . Requisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'alteracao-requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Requisito($parentID),
    'columns' => array(
        'id',
        array(
            'name' => 'alteracao',
            'value' => 'isset($data->alteracao0) ? $data->alteracao0 : null',
            'filter' => CHtml::listData(Alteracao::model()->findAll(), 'id', Alteracao::representingColumn()),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>

<legend><?php echo Yii::t('AweCrud.app', 'Stakeholders do') . ' ' . Requisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'requisito-stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_2->search_Requisito($parentID),
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

<legend><?php echo Yii::t('AweCrud.app', 'Casos de Uso do') . ' ' . Requisito::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'caso-requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_3->search_Requisito($parentID),
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
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("alteracaoRequisito/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>