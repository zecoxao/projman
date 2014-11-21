<?php
/** @var RequisitosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'cod_requisito', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'projecto', CHtml::listData(Projecto::model()->findAll(), 'cod_projecto', Projecto::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->dropDownListRow($model, 'estado', CHtml::listData(Estado::model()->findAll(), 'cod_estado', Estado::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
