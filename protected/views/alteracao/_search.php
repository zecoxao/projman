<?php
/* @var $this AlteracaoController */
/* @var $model Alteracao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_alteracao'); ?>
		<?php echo $form->textField($model,'cod_alteracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stakeholder'); ?>
		<?php echo $form->textField($model,'stakeholder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_alteracao'); ?>
		<?php echo $form->textField($model,'data_alteracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->