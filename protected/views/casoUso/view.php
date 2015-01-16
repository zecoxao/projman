<?php
/** @var CasoUsoController $this */
/** @var CasoUso $model */
$this->breadcrumbs = array(
    'Caso Usos' => array('index'),
    $model->id,
);

$this->menu = array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CasoUso::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CasoUso::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
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
    ));
    ?>
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
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("ecraCaso/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("ecraCaso/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("ecraCaso/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("ecraCaso/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
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
            'template' => '{create}{view}{update}{delete}',
            'buttons' => array(
                'create' => array(
                    'label' => '+', // text label of the button
                    'url' => 'Yii::app()->createUrl("entidadeCaso/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("entidadeCaso/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("entidadeCaso/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("entidadeCaso/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
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

<legend><?php echo Yii::t('AweCrud.app', 'Requisitos do') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'caso-requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $child_model_4->search_Caso($parentID),
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
                    'url' => 'Yii::app()->createUrl("casoRequisito/create", array("id"=>$data->id))',
                ),
                'view' => array(
                    'label' => 'r', // text label of the button
                    'url' => 'Yii::app()->createUrl("casoRequisito/view", array("id"=>$data->id))',
                ),
                'update' => array(
                    'label' => 'u', // text label of the button
                    'url' => 'Yii::app()->createUrl("casoRequisito/update", array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'd', // text label of the button
                    'url' => 'Yii::app()->createUrl("casoRequisito/delete", array("id"=>$data->id))',
                ),
            ),
        ),
    )
));
?>