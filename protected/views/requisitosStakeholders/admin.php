<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Requisitos de Stakeholders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Requisitos de Stakeholders', 'url'=>array('index')),
	array('label'=>'Create Requisitos de Stakeholder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('requisitosStakeholdersgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requisitos de Stakeholders</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'requisitosStakeholdersgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'requisito',
        'stakeholder',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("requisitosStakeholders/view/", 
                                            array("requisito"=>$data->requisito, "stakeholder"=>$data->stakeholder
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("requisitosStakeholders/update/", 
                                            array("requisito"=>$data->requisito, "stakeholder"=>$data->stakeholder
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("requisitosStakeholders/delete/", 
                                            array("requisito"=>$data->requisito, "stakeholder"=>$data->stakeholder
											))',
                ),
            ),
        ),
    ),
)); ?>
