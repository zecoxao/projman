<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'stakeholder'); ?>
        <?php echo $form->textField($model,'stakeholder'); ?>
        <?php echo $form->error($model,'stakeholder'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'membro'); ?>
        <?php echo $form->textField($model,'membro'); ?>
        <?php echo $form->error($model,'membro'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 