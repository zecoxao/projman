<?php
/** @var MembroProjectoController $this */
/** @var MembroProjecto $data */
?>
<div class="view">
                    
        <?php if (!empty($data->membro0->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('membro')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->membro0->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
                
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
    </div>