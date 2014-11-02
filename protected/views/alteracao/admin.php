<?php
/* @var $this AlteracaoController */
/* @var $model Alteracao */

$this->breadcrumbs = array(
    'Alteracaos' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Alteracao', 'url' => array('index')),
    array('label' => 'Create Alteracao', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alteracao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alteracaos</h1>

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
    'id' => 'alteracao-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'cod_alteracao',
        //'stakeholder',
        'data_alteracao',
        'descricao',
        array(
            'header' => 'Nome de Stakeholder',
            'name' => 'nome_stakeholder',
            'value' => '$data->stakeholder0->pessoa0->nome',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
