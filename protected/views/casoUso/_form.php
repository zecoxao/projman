<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'caso-uso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'dominio',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'nivel',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'actor_primario',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'pre_condicao',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'iniciador',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'cenario_sucesso',array('class'=>'span5','maxlength'=>500)); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
