<?php
/** @var StakeholderController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'cod_stakeholder', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->dropDownListRow($model, 'grupo', CHtml::listData(GrupoAnalise::model()->findAll(), 'cod_grupo', GrupoAnalise::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'cliente', CHtml::listData(Cliente::model()->findAll(), 'cod_cliente', Cliente::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'pessoa', CHtml::listData(Pessoa::model()->findAll(), 'cod_pessoa', Pessoa::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
