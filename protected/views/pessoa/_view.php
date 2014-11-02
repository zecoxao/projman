<?php
/* @var $this PessoaController */
/* @var $data Pessoa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_pessoa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_pessoa), array('view', 'id'=>$data->cod_pessoa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morada')); ?>:</b>
	<?php echo CHtml::encode($data->morada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tlm')); ?>:</b>
	<?php echo CHtml::encode($data->tlm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento); ?>
	<br />


</div>