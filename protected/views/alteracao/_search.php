<?php
/** @var AlteracaoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'cod_alteracao', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'stakeholder', CHtml::listData(Stakeholder::model()->findAll(), 'cod_stakeholder', Stakeholder::representingColumn())); ?>

<?php echo $form->datepickerRow($model, 'data_alteracao', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 250)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
