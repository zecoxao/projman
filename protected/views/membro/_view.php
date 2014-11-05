<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_membro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_membro),array('view','id'=>$data->cod_membro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa')); ?>:</b>
	<?php echo CHtml::encode($data->pessoa); ?>
	<br />


</div>