<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'cod_stakeholder',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'descricao',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'grupo',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'cliente',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'pessoa',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
