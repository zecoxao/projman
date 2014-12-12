<div class="form">
    <?php
    /** @var AlteracaoController $this */
    /** @var Alteracao $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'alteracao-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->dropDownListRow($model, 'stakeholder', CHtml::listData(Stakeholder::model()->findAll(), 'id', Stakeholder::representingColumn())) ?>
                        <?php echo $form->datepickerRow($model, 'data_alteracao', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 250)) ?>
            <div class="row nm_row">
<label for="requisitos"><?php echo Yii::t('app', 'Requisitos'); ?></label>
<?php echo CHtml::checkBoxList('Alteracao[requisitos]', array_map('AweHtml::getPrimaryKey', $model->requisitos),
CHtml::listData(Requisito::model()->findAll(), 'id', 'descricao'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

    <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>