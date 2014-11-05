<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_projecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_projecto),array('view','id'=>$data->cod_projecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->data_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_fim')); ?>:</b>
	<?php echo CHtml::encode($data->data_fim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracao')); ?>:</b>
	<?php echo CHtml::encode($data->duracao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ambito')); ?>:</b>
	<?php echo CHtml::encode($data->ambito); ?>
	<br />


</div>