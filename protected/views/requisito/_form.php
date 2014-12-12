<div class="form">
    <?php
    /** @var RequisitoController $this */
    /** @var Requisito $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'requisito-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->dropDownListRow($model, 'projecto', CHtml::listData(Projecto::model()->findAll(), 'id', Projecto::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->dropDownListRow($model, 'estado', CHtml::listData(Estado::model()->findAll(), 'id', Estado::representingColumn())) ?>
            <div class="row nm_row">
<label for="alteracaos"><?php echo Yii::t('app', 'Alteracaos'); ?></label>
<?php echo CHtml::checkBoxList('Requisito[alteracaos]', array_map('AweHtml::getPrimaryKey', $model->alteracaos),
CHtml::listData(Alteracao::model()->findAll(), 'id', 'data_alteracao'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="stakeholders"><?php echo Yii::t('app', 'Stakeholders'); ?></label>
<?php echo CHtml::checkBoxList('Requisito[stakeholders]', array_map('AweHtml::getPrimaryKey', $model->stakeholders),
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