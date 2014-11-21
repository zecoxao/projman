<?php
/** @var RequisitosController $this */
/** @var Requisitos $model */
$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Requisitos::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Requisitos::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('requisitos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Requisitos::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'requisitos-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'cod_requisito',
        array(
                    'name' => 'projecto',
                    'value' => 'isset($data->projecto0) ? $data->projecto0 : null',
                    'filter' => CHtml::listData(Projecto::model()->findAll(), 'cod_projecto', Projecto::representingColumn()),
                ),
        'descricao',
        array(
                    'name' => 'estado',
                    'value' => 'isset($data->estado0) ? $data->estado0 : null',
                    'filter' => CHtml::listData(Estado::model()->findAll(), 'cod_estado', Estado::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>