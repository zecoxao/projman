<?php
/** @var StakeholderMembroController $this */
/** @var StakeholderMembro $model */
$this->breadcrumbs=array(
	'Stakeholder Membros'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . StakeholderMembro::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . StakeholderMembro::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stakeholder-membro-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo StakeholderMembro::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'stakeholder-membro-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'stakeholder',
                    'value' => 'isset($data->stakeholder0) ? $data->stakeholder0 : null',
                    'filter' => CHtml::listData(Stakeholder::model()->findAll(), 'id', Stakeholder::representingColumn()),
                ),
        array(
                    'name' => 'membro',
                    'value' => 'isset($data->membro0) ? $data->membro0 : null',
                    'filter' => CHtml::listData(Membro::model()->findAll(), 'id', Membro::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>