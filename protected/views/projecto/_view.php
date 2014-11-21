<?php
/** @var ProjectoController $this */
/** @var Projecto $data */
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
                
        <?php if (!empty($data->data_inicio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('data_inicio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->data_inicio, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->data_inicio)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->data_fim)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('data_fim')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->data_fim, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->data_fim)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->duracao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('duracao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->duracao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->ambito)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ambito')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ambito); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>