<?php
/** @var AlteracaoRequisitoController $this */
/** @var AlteracaoRequisito $data */
?>
<div class="view">
                    
        <?php if (!empty($data->alteracao0->data_alteracao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('alteracao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->alteracao0->data_alteracao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->requisito0->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('requisito')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->requisito0->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>