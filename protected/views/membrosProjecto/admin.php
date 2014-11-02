<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Membros de Projectos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Membros de Projectos', 'url'=>array('index')),
	array('label'=>'Create Membros de Projecto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('membrosProjectogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Membros de Projectos</h1>

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
    'id'=>'membrosProjectogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        //'projecto',
        //'membro',
        array(
            'header' => 'Nome de Membro',
            'name' => 'nome_membro',
            'value' => '$data->membro0->pessoa0->nome',
        ),
        array(
            'header' => 'Descricao de Projecto',
            'name' => 'projecto0.descricao',
            'filter' => CHtml::activeTextField($model, 'descricao_projecto'),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("membrosProjecto/view/", 
                                            array("projecto"=>$data->projecto, "membro"=>$data->membro
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("membrosProjecto/update/", 
                                            array("projecto"=>$data->projecto, "membro"=>$data->membro
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("membrosProjecto/delete/", 
                                            array("projecto"=>$data->projecto, "membro"=>$data->membro
											))',
                ),
            ),
        ),
    ),
)); ?>
