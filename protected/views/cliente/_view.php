<?php
/** @var ClienteController $this */
/** @var Cliente $data */
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
                
        <?php if (!empty($data->pessoa0->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('pessoa')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->pessoa0->nome); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>