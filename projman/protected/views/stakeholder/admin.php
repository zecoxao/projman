<?php
/** @var StakeholderController $this */
/** @var Stakeholder $model */
$this->breadcrumbs=array(
	'Stakeholders'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Stakeholder::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Stakeholder::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stakeholder-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Stakeholder::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'stakeholder-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'descricao',
        array(
                    'name' => 'grupo',
                    'value' => 'isset($data->grupo0) ? $data->grupo0 : null',
                    'filter' => CHtml::listData(Grupo::model()->findAll(), 'id', Grupo::representingColumn()),
                ),
        array(
                    'name' => 'cliente',
                    'value' => 'isset($data->cliente0) ? $data->cliente0 : null',
                    'filter' => CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn()),
                ),
        array(
                    'name' => 'pessoa',
                    'value' => 'isset($data->pessoa0) ? $data->pessoa0 : null',
                    'filter' => CHtml::listData(Pessoa::model()->findAll(), 'id', Pessoa::representingColumn()),
                ),
        array(
                    'name' => 'projecto',
                    'value' => 'isset($data->projecto0) ? $data->projecto0 : null',
                    'filter' => CHtml::listData(Projecto::model()->findAll(), 'id', Projecto::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>