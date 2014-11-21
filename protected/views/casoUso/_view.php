<?php
/** @var CasousoController $this */
/** @var CasoUso $data */
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
                
        <?php if (!empty($data->dominio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('dominio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->dominio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nivel)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nivel); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->actor_primario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('actor_primario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->actor_primario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->pre_condicao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('pre_condicao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->pre_condicao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->iniciador)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('iniciador')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->iniciador); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cenario_sucesso)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cenario_sucesso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cenario_sucesso); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>