<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'stakeholder'=>$data->stakeholder, 'membro'=>$data->membro)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('stakeholder')); ?>:</b>
	<?php echo CHtml::encode($data->stakeholder); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('membro')); ?>:</b>
	<?php echo CHtml::encode($data->membro); ?><br />
</div>
