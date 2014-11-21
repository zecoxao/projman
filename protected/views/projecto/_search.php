<?php
/** @var ProjectoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'cod_projecto', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->datepickerRow($model, 'data_inicio', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->datepickerRow($model, 'data_fim', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'duracao', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'ambito', array('class' => 'span5', 'maxlength' => 100)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
