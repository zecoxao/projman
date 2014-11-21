<?php
/** @var EntidadeController $this */
/** @var Entidade $data */
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
    </div>