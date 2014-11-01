<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'entidade'=>$data->entidade, 'caso_uso'=>$data->caso_uso)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('entidade')); ?>:</b>
	<?php echo CHtml::encode($data->entidade); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('caso_uso')); ?>:</b>
	<?php echo CHtml::encode($data->caso_uso); ?><br />
</div>
