<?php
/* @var $this ProjectoMultipleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projecto Multiples',
);

$menu=array();
require(dirname(__FILE__).DIRECTORY_SEPARATOR.'_menu.php');
$this->menu=array(
	array('label'=>'ProjectoMultiple','url'=>array('index'),'icon'=>'fa fa-list-alt', 'items' => $menu)	
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('projecto-multiple-grid', {
			data: $(this).serialize()
		});
		return false;
	});
");

Yii::app()->clientScript->registerScript('refreshGridView', "
	// automatically refresh grid on 5 seconds
	//setInterval(\"$.fn.yiiGridView.update('projecto-multiple-grid')\",5000);
");

?>

<?php $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => 'List Projecto Multiples' ,
        'headerIcon' => 'icon- fa fa-list-ol',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButtonGroup',
                'type' => 'success',
                // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                'buttons' => $this->menu
            ),
        ) 
    )
);?>
<?php /** $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); **/ ?>
		<?php $this->widget('bootstrap.widgets.TbAlert', array(
		    'block'=>false, // display a larger alert block?
		    'fade'=>true, // use transitions?
		    'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
		    'alerts'=>array( // configurations per alert type
		        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'danger'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		    ),
		));
		?><p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php echo CHtml::beginForm(array('export')); ?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'projecto-multiple-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped hover', //bordered condensed
	'columns'=>array(
		array(
	        'name'=> 'cod_projecto',
	        'value' => '($data->cod_projecto)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'descricao',
	        'value' => '($data->descricao)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'header' => 'Data_inicio',
	        'name'=> 'data_inicio',
	        'type'=>'raw',
	        'value' => '(date("d-M-Y",strtotime($data->data_inicio)))',
	        'headerHtmlOptions' => array('style' => 'width:100px;text-align:center;'),
	    ),
		
		array(
	        'header' => 'Data_fim',
	        'name'=> 'data_fim',
	        'type'=>'raw',
	        'value' => '(date("d-M-Y",strtotime($data->data_fim)))',
	        'headerHtmlOptions' => array('style' => 'width:100px;text-align:center;'),
	    ),
		
		array(
	        'name'=> 'duracao',
	        'value' => '($data->duracao)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'ambito',
	        'value' => '($data->ambito)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		

		/*
		//Contoh
		array(
	        'header' => 'Level',
	        'name'=> 'ref_level_id',
	        'type'=>'raw',
	        'value' => '($data->Level->name)',
	        // 'value' => '($data->status)?"on":"off"',
	        // 'value' => '@Admin::model()->findByPk($data->createdBy)->username',
	    ),
	    */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view}',
			'buttons'=>array
            (
                'view' => array
                (    
                	'url' => '$data->cod_projecto."|".$data->cod_projecto',              
                	'click' => 'function(){
                		data=$(this).attr("href").split("|")
                		$("#myModalHeader").html(data[1]);
	        			$("#myModalBody").load("'.$this->createUrl('view').'&id="+data[0]+"&asModal=true");
                		$("#myModal").modal();
                		return false;
                	}',
                ),
                            )
		),
	),
)); ?>

<select name="fileType" style="width:150px;">
	<option value="Excel5">EXCEL 5 (xls)</option>
	<option value="Excel2007">EXCEL 2007 (xlsx)</option>
	<option value="HTML">HTML</option>
	<option value="PDF">PDF</option>
	<option value="WORD">WORD (docx)</option>
</select>
<br>

<?php 
$this->widget('bootstrap.widgets.TbButton', array(
	'buttonType'=>'submit', 'icon'=>'fa fa-print','label'=>'Export', 'type'=> 'primary'));
?>
<?php echo CHtml::endForm(); ?>
<?php $this->endWidget(); ?>
<?php  $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4 id="myModalHeader">Modal header</h4>
    </div>
 
    <div class="modal-body" id="myModalBody">
        <p>One fine body...</p>
    </div>
 
    <div class="modal-footer">
        <?php  $this->widget(
            'bootstrap.widgets.TbButton',
            array(
                'label' => 'Close',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php  $this->endWidget(); ?>