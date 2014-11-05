<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cod_caso_uso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_caso_uso),array('view','id'=>$data->cod_caso_uso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dominio')); ?>:</b>
	<?php echo CHtml::encode($data->dominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actor_primario')); ?>:</b>
	<?php echo CHtml::encode($data->actor_primario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_condicao')); ?>:</b>
	<?php echo CHtml::encode($data->pre_condicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iniciador')); ?>:</b>
	<?php echo CHtml::encode($data->iniciador); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cenario_sucesso')); ?>:</b>
	<?php echo CHtml::encode($data->cenario_sucesso); ?>
	<br />

	*/ ?>

</div>