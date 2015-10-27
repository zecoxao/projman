<?php
/** @var AlteracaoRequisitoController $this */
/** @var AlteracaoRequisito $model */
$this->breadcrumbs=array(
	'Alteracao Requisitos'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . AlteracaoRequisito::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . AlteracaoRequisito::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('alteracao-requisito-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo AlteracaoRequisito::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'alteracao-requisito-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'alteracao',
                    'value' => 'isset($data->alteracao0) ? $data->alteracao0 : null',
                    'filter' => CHtml::listData(Alteracao::model()->findAll(), 'id', Alteracao::representingColumn()),
                ),
        array(
                    'name' => 'requisito',
                    'value' => 'isset($data->requisito0) ? $data->requisito0 : null',
                    'filter' => CHtml::listData(Requisito::model()->findAll(), 'id', Requisito::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>