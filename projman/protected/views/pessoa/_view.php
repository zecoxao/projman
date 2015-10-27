<?php
/** @var PessoaController $this */
/** @var Pessoa $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nome); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->morada)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('morada')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->morada); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tlm)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tlm')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tlm); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->data_nascimento)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->data_nascimento, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->data_nascimento)); ?>
                            </div>
        </div>

        <?php endif; ?>
    </div>