<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Casos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Membros de Casos', 'url'=>array('index')),
	array('label'=>'Create Membros de Caso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('membrosCasoUsogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Membros de Casos</h1>

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
    'id'=>'membrosCasoUsogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        //'membro',
        //'caso_uso',
        array(
            'header' => 'Nome de Membro',
            'name' => 'nome_membro',
            'value' => '$data->membro0->pessoa0->username',
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
                    'Yii::app()->createUrl("membrosCasoUso/view/", 
                                            array("membro"=>$data->membro, "caso_uso"=>$data->caso_uso
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("membrosCasoUso/update/", 
                                            array("membro"=>$data->membro, "caso_uso"=>$data->caso_uso
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("membrosCasoUso/delete/", 
                                            array("membro"=>$data->membro, "caso_uso"=>$data->caso_uso
											))',
                ),
            ),
        ),
    ),
)); ?>
