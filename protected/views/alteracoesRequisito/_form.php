<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'alteracao'); ?>
        <?php echo $form->textField($model,'alteracao'); ?>
        <?php echo $form->error($model,'alteracao'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'requisito'); ?>
        <?php echo $form->textField($model,'requisito'); ?>
        <?php echo $form->error($model,'requisito'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
