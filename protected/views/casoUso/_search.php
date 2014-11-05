<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'cod_caso_uso',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'dominio',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'nivel',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'actor_primario',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'pre_condicao',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'iniciador',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'cenario_sucesso',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
