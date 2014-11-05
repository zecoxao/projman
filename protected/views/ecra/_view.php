<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_ecra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_ecra),array('view','id'=>$data->cod_ecra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo_ecra')); ?>:</b>
	<?php echo CHtml::encode($data->modelo_ecra); ?>
	<br />


</div>