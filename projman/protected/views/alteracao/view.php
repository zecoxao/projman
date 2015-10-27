<?php
/** @var AlteracaoController $this */
/** @var Alteracao $model */
$this->breadcrumbs = array(
    'Alteracaos' => array('index'),
    $model->id,
);

$this->menu = array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Alteracao::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Alteracao::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Alteracao::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            array(
                'name' => 'stakeholder',
                'value' => ($model->stakeholder0 !== null) ? CHtml::link($model->stakeholder0, array('/stakeholder/view', 'id' => $model->stakeholder0->id)) . ' ' : null,
                'type' => 'html',
            ),
            'data_alteracao',
            'descricao',
        ),
    ));
    ?>
</fieldset>

<legend><?php echo Yii::t('AweCrud.app', 'Requisitos da') . ' ' . Alteracao::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'alteracao-requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model->search_Alteracao($parentID),
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

