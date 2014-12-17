<?php
/** @var StakeholderMembroController $this */
/** @var StakeholderMembro $model */
$this->breadcrumbs = array(
	'Stakeholder Membros',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . StakeholderMembro::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo StakeholderMembro::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>