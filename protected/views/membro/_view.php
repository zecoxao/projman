<?php
/* @var $this MembroController */
/* @var $data Membro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_membro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_membro), array('view', 'id'=>$data->cod_membro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />


</div>