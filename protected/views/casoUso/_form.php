<?php
/* @var $this CasoUsoController */
/* @var $model CasoUso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caso-uso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dominio'); ?>
		<?php echo $form->textField($model,'dominio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actor_primario'); ?>
		<?php echo $form->textField($model,'actor_primario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'actor_primario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_condicao'); ?>
		<?php echo $form->textField($model,'pre_condicao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pre_condicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iniciador'); ?>
		<?php echo $form->textField($model,'iniciador',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'iniciador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cenario_sucesso'); ?>
		<?php echo $form->textField($model,'cenario_sucesso',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'cenario_sucesso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->