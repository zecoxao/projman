<?php
/** @var RequisitoStakeholderController $this */
/** @var RequisitoStakeholder $model */
$this->breadcrumbs=array(
	'Requisito Stakeholders'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . RequisitoStakeholder::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . RequisitoStakeholder::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('requisito-stakeholder-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo RequisitoStakeholder::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'requisito-stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'requisito',
                    'value' => 'isset($data->requisito0) ? $data->requisito0 : null',
                    'filter' => CHtml::listData(Requisito::model()->findAll(), 'id', Requisito::representingColumn()),
                ),
        array(
                    'name' => 'stakeholder',
                    'value' => 'isset($data->stakeholder0) ? $data->stakeholder0 : null',
                    'filter' => CHtml::listData(Stakeholder::model()->findAll(), 'id', Stakeholder::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>