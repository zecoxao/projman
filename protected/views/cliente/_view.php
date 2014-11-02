<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_cliente), array('view', 'id'=>$data->cod_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa')); ?>:</b>
	<?php echo CHtml::encode($data->pessoa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>