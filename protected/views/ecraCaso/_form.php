<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'ecra'); ?>
        <?php echo $form->textField($model,'ecra'); ?>
        <?php echo $form->error($model,'ecra'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'caso_uso'); ?>
        <?php echo $form->textField($model,'caso_uso'); ?>
        <?php echo $form->error($model,'caso_uso'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
