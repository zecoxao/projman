<?php
/* @var $this EntidadeController */
/* @var $data Entidade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_entidade')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_entidade), array('view', 'id'=>$data->cod_entidade)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>