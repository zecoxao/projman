<?php
/* @var $this StakeholderController */
/* @var $model Stakeholder */

$this->breadcrumbs = array(
    'Stakeholders' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Stakeholder', 'url' => array('index')),
    array('label' => 'Create Stakeholder', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stakeholder-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stakeholders</h1>

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
    'id' => 'stakeholder-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'cod_stakeholder',
        array(
            'header' => 'Nome de Stakeholder',
            'name' => 'pessoa0.username',
            'filter' => CHtml::activeTextField($model, 'nome_stakeholder'),
        ),
        array(
            'header' => 'Grupo',
            'name' => 'grupo0.descricao',
            'filter' => CHtml::activeTextField($model, 'descricao_grupo'),
        ),
        array(
            'header' => 'Nome de Cliente',
            'name' => 'nome_cliente',
            'value' => '$data->cliente0->pessoa0->username',
        ),
        //'pessoa',
        'descricao',
        //'grupo',
        //'cliente',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
