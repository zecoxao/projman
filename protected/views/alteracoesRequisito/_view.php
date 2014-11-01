<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'alteracao'=>$data->alteracao, 'requisito'=>$data->requisito)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('alteracao')); ?>:</b>
	<?php echo CHtml::encode($data->alteracao); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('requisito')); ?>:</b>
	<?php echo CHtml::encode($data->requisito); ?><br />
</div>
