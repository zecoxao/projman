<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Ecras de Casos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ecras de Casos', 'url'=>array('index')),
	array('label'=>'Create Ecras de Caso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ecraCasogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ecras de Casos</h1>

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
    'id'=>'ecraCasogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'ecra',
        'caso_uso',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("ecraCaso/view/", 
                                            array("ecra"=>$data->ecra, "caso_uso"=>$data->caso_uso
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("ecraCaso/update/", 
                                            array("ecra"=>$data->ecra, "caso_uso"=>$data->caso_uso
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("ecraCaso/delete/", 
                                            array("ecra"=>$data->ecra, "caso_uso"=>$data->caso_uso
											))',
                ),
            ),
        ),
    ),
)); ?>
