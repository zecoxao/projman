<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Alteracoes a Requisitos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alteracoes a Requisitos', 'url'=>array('index')),
	array('label'=>'Create Alteracoes a Requisito', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('alteracoesRequisitogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alteracoes a Requisitos</h1>

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
    'id'=>'alteracoesRequisitogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'alteracao',
        'requisito',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("alteracoesRequisito/view/", 
                                            array("alteracao"=>$data->alteracao, "requisito"=>$data->requisito
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("alteracoesRequisito/update/", 
                                            array("alteracao"=>$data->alteracao, "requisito"=>$data->requisito
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("alteracoesRequisito/delete/", 
                                            array("alteracao"=>$data->alteracao, "requisito"=>$data->requisito
											))',
                ),
            ),
        ),
    ),
)); ?>
