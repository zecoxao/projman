<div class="form">
    <?php
    /** @var StakeholderController $this */
    /** @var Stakeholder $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'stakeholder-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->dropDownListRow($model, 'grupo', CHtml::listData(Grupo::model()->findAll(), 'id', Grupo::representingColumn())) ?>
                        <?php echo $form->dropDownListRow($model, 'cliente', CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn())) ?>
                        <?php echo $form->dropDownListRow($model, 'pessoa', CHtml::listData(Pessoa::model()->findAll(), 'id', Pessoa::representingColumn())) ?>
                        <?php echo $form->dropDownListRow($model, 'projecto', CHtml::listData(Projecto::model()->findAll(), 'id', Projecto::representingColumn())) ?>
            <div class="row nm_row">
<label for="requisitos"><?php echo Yii::t('app', 'Requisitos'); ?></label>
<?php echo CHtml::checkBoxList('Stakeholder[requisitos]', array_map('AweHtml::getPrimaryKey', $model->requisitos),
CHtml::listData(Requisito::model()->findAll(), 'id', 'descricao'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="membros"><?php echo Yii::t('app', 'Membros'); ?></label>
<?php echo CHtml::checkBoxList('Stakeholder[membros]', array_map('AweHtml::getPrimaryKey', $model->membros),
CHtml::listData(Membro::model()->findAll(), 'id', 'descricao'),
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