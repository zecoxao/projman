<?php
/** @var MembroCasoController $this */
/** @var MembroCaso $data */
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
                
        <?php if (!empty($data->casoUso->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('caso_uso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->casoUso->nome); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>