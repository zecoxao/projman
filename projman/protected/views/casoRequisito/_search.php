<?php
/** @var CasoRequisitoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'caso_uso', CHtml::listData(CasoUso::model()->findAll(), 'id', CasoUso::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'requisito', CHtml::listData(Requisito::model()->findAll(), 'id', Requisito::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
