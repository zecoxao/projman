<div class="form">
    <?php
    /** @var CasousoController $this */
    /** @var CasoUso $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'caso-uso-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'nome', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'dominio', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'nivel', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'actor_primario', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'pre_condicao', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'iniciador', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'cenario_sucesso', array('class' => 'span5', 'maxlength' => 500)) ?>
            <div class="row nm_row">
<label for="ecras"><?php echo Yii::t('app', 'Ecras'); ?></label>
<?php echo CHtml::checkBoxList('CasoUso[ecras]', array_map('AweHtml::getPrimaryKey', $model->ecras),
CHtml::listData(Ecra::model()->findAll(), 'cod_ecra', 'descricao'),
array('attributeitem' => 'cod_ecra', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="entidades"><?php echo Yii::t('app', 'Entidades'); ?></label>
<?php echo CHtml::checkBoxList('CasoUso[entidades]', array_map('AweHtml::getPrimaryKey', $model->entidades),
CHtml::listData(Entidade::model()->findAll(), 'cod_entidade', 'nome'),
array('attributeitem' => 'cod_entidade', 'checkAll' => 'Select All')) ?></div>

<div class="row nm_row">
<label for="membros"><?php echo Yii::t('app', 'Membros'); ?></label>
<?php echo CHtml::checkBoxList('CasoUso[membros]', array_map('AweHtml::getPrimaryKey', $model->membros),
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