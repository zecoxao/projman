<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'cod_projecto',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'descricao',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->datepickerRow($model,'data_inicio',
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

		<?php echo $form->datepickerRow($model,'data_fim',
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

		<?php echo $form->textFieldRow($model,'duracao',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'ambito',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>