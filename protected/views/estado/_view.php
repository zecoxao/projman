<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_estado),array('view','id'=>$data->cod_estado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>