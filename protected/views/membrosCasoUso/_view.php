<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'membro'=>$data->membro, 'caso_uso'=>$data->caso_uso)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('membro')); ?>:</b>
	<?php echo CHtml::encode($data->membro); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('caso_uso')); ?>:</b>
	<?php echo CHtml::encode($data->caso_uso); ?><br />
</div>
