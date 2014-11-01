<?php
/* @var $this StakeholderController */
/* @var $data Stakeholder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_stakeholder')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_stakeholder), array('view', 'id'=>$data->cod_stakeholder)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
	<?php echo CHtml::encode($data->grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />


</div>