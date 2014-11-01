<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'requisito'=>$data->requisito, 'stakeholder'=>$data->stakeholder)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('requisito')); ?>:</b>
	<?php echo CHtml::encode($data->requisito); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('stakeholder')); ?>:</b>
	<?php echo CHtml::encode($data->stakeholder); ?><br />
</div>
