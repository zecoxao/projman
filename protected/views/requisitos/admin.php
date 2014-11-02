<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs = array(
    'Requisitoses' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Requisitos', 'url' => array('index')),
    array('label' => 'Create Requisitos', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#requisitos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requisitoses</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'requisitos-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'cod_requisito',
        //'projecto',
        'descricao',
        //'estado',
        array(
            'header' => 'Descrição de Estado',
            'name' => 'estado0.descricao',
            'filter' => CHtml::activeTextField($model, 'descricao_estado'),
        ),
        array(
            'header' => 'Descrição de Projecto',
            'name' => 'projecto0.descricao',
            'filter' => CHtml::activeTextField($model, 'descricao_projecto'),
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
