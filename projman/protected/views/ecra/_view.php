<?php
/** @var EcraController $this */
/** @var Ecra $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->modelo_ecra)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('modelo_ecra')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->modelo_ecra); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>