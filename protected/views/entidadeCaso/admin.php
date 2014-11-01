<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Entidades de Casos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Entidades de Casos', 'url'=>array('index')),
	array('label'=>'Create Entidades de Caso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('entidadeCasogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Entidades de Casos</h1>

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
    'id'=>'entidadeCasogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        //'entidade',
        //'caso_uso',
        array(
            'header' => 'Descrição de Entidade',
            'name' => 'entidade0.descricao',
            'filter' => CHtml::activeTextField($model, 'descricao_entidade'),
        ),
        array(
            'header' => 'Nome de Caso de Uso',
            'name' => 'caso_uso0.nome',
            'filter' => CHtml::activeTextField($model, 'nome_caso'),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("entidadeCaso/view/", 
                                            array("entidade"=>$data->entidade, "caso_uso"=>$data->caso_uso
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("entidadeCaso/update/", 
                                            array("entidade"=>$data->entidade, "caso_uso"=>$data->caso_uso
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("entidadeCaso/delete/", 
                                            array("entidade"=>$data->entidade, "caso_uso"=>$data->caso_uso
											))',
                ),
            ),
        ),
    ),
)); ?>
