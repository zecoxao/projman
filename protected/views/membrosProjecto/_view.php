<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'projecto'=>$data->projecto, 'membro'=>$data->membro)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('projecto')); ?>:</b>
	<?php echo CHtml::encode($data->projecto); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('membro')); ?>:</b>
	<?php echo CHtml::encode($data->membro); ?><br />
</div>
