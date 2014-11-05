<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_alteracao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_alteracao),array('view','id'=>$data->cod_alteracao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stakeholder')); ?>:</b>
	<?php echo CHtml::encode($data->stakeholder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:</b>
	<?php echo CHtml::encode($data->data_alteracao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>