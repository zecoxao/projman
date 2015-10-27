<?php
/** @var CasoRequisitoController $this */
/** @var CasoRequisito $data */
?>
<div class="view">
                    
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