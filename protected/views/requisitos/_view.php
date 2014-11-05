<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_requisito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_requisito),array('view','id'=>$data->cod_requisito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projecto')); ?>:</b>
	<?php echo CHtml::encode($data->projecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>