<div class="form">
    <?php
    /** @var MembroController $this */
    /** @var Membro $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'membro-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->dropDownListRow($model, 'pessoa', CHtml::listData(Pessoa::model()->findAll(), 'id', Pessoa::representingColumn())) ?>
            <div class="row nm_row">
<label for="casoUsos"><?php echo Yii::t('app', 'CasoUsos'); ?></label>
<?php echo CHtml::checkBoxList('Membro[casoUsos]', array_map('AweHtml::getPrimaryKey', $model->casoUsos),
CHtml::listData(CasoUso::model()->findAll(), 'id', 'nome'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="projectos"><?php echo Yii::t('app', 'Projectos'); ?></label>
<?php echo CHtml::checkBoxList('Membro[projectos]', array_map('AweHtml::getPrimaryKey', $model->projectos),
CHtml::listData(Projecto::model()->findAll(), 'id', 'descricao'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="stakeholders"><?php echo Yii::t('app', 'Stakeholders'); ?></label>
<?php echo CHtml::checkBoxList('Membro[stakeholders]', array_map('AweHtml::getPrimaryKey', $model->stakeholders),
CHtml::listData(Stakeholder::model()->findAll(), 'id', 'descricao'),
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