<?php
/** @var GrupoanaliseController $this */
/** @var GrupoAnalise $model */
$this->breadcrumbs = array(
	'Grupo Analises',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . GrupoAnalise::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo GrupoAnalise::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>