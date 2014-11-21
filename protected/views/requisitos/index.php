<?php
/** @var RequisitosController $this */
/** @var Requisitos $model */
$this->breadcrumbs = array(
	'Requisitoses',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Requisitos::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo Requisitos::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
    
    <?php echo CHtml::beginForm(array('export')); ?>
    <select name="fileType" style="width:150px;">
        <option value="Excel5">EXCEL 5 (xls)</option>
        <option value="Excel2007">EXCEL 2007 (xlsx)</option>
        <option value="HTML">HTML</option>
        <option value="PDF">PDF</option>
        <option value="WORD">WORD (docx)</option>
    </select>
    <br>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit', 'icon' => 'fa fa-print', 'label' => 'Export', 'type' => 'primary'));
    ?>
</fieldset>