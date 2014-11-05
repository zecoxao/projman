<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'cod_pessoa',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'morada',array('class'=>'span5','maxlength'=>150)); ?>

		<?php echo $form->textFieldRow($model,'tlm',array('class'=>'span5')); ?>

		<?php echo $form->datepickerRow($model,'data_nascimento',
								array(
					                'options' => array(
					                    'language' => 'id',
					                    'format' => 'yyyy-mm-dd', 
					                    'weekStart'=> 1,
					                    'autoclose'=>'true',
					                    'keyboardNavigation'=>true,
					                ), 
					            ),
					            array(
					                'prepend' => '<i class="icon-calendar"></i>'
					            )
			);; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
