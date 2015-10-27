<?php
/** @var EntidadeCasoController $this */
/** @var EntidadeCaso $data */
?>
<div class="view">
                    
        <?php if (!empty($data->entidade0->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entidade')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entidade0->nome); ?>
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