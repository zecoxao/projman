<?php
/** @var CasousoController $this */
/** @var CasoUso $model */
$this->breadcrumbs=array(
	'Caso Usos'=>array('index'),
	$model->cod_caso_uso,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CasoUso::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CasoUso::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->cod_caso_uso)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_caso_uso), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . CasoUso::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'cod_caso_uso',
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