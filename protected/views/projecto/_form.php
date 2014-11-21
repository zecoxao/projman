<div class="form">
    <?php
    /** @var ProjectoController $this */
    /** @var Projecto $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'projecto-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'descricao', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->datepickerRow($model, 'data_inicio', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->datepickerRow($model, 'data_fim', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->textFieldRow($model, 'duracao', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'ambito', array('class' => 'span5', 'maxlength' => 100)) ?>
            <div class="row nm_row">
<label for="membros"><?php echo Yii::t('app', 'Membros'); ?></label>
<?php echo CHtml::checkBoxList('Projecto[membros]', array_map('AweHtml::getPrimaryKey', $model->membros),
CHtml::listData(Membro::model()->findAll(), 'cod_membro', 'descricao'),
array('attributeitem' => 'cod_membro', 'checkAll' => 'Select All')) ?></div>

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