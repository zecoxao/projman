<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Stakeholders de Membros'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Stakeholders de Membros', 'url'=>array('index')),
	array('label'=>'Create Stakeholders de Membro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stakeholderMembrogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stakeholders de Membros</h1>

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
    'id'=>'stakeholderMembrogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        //'stakeholder',
        //'membro',
        array(
            'header' => 'Nome de Stakeholder',
            'name' => 'nome_stakeholder',
            'value' => '$data->stakeholder1->pessoa0->username',
        ),
        array(
            'header' => 'Nome de Membro',
            'name' => 'nome_membro',
            'value' => '$data->membro1->pessoa0->username',
        ),
        
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("stakeholderMembro/view/", 
                                            array("stakeholder"=>$data->stakeholder, "membro"=>$data->membro
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("stakeholderMembro/update/", 
                                            array("stakeholder"=>$data->stakeholder, "membro"=>$data->membro
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("stakeholderMembro/delete/", 
                                            array("stakeholder"=>$data->stakeholder, "membro"=>$data->membro
											))',
                ),
            ),
        ),
    ),
)); ?>
