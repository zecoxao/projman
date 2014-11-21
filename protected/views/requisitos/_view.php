<?php
/** @var RequisitosController $this */
/** @var Requisitos $data */
?>
<div class="view">
                    
        <?php if (!empty($data->projecto0->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('projecto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->projecto0->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->estado0->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado0->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>