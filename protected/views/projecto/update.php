<?php
/** @var ProjectoController $this */
/** @var Projecto $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('app', $model->cod_projecto) => array('view', 'id'=>$model->cod_projecto),
	Yii::t('AweCrud.app', 'Update'),
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Projecto::label(2), 'icon' => 'list', 'url' => array('index')),
	//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Projecto::label(), 'icon' => 'plus', 'url' => array('create')),
	//array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'url'=>array('view', 'id' => $model->cod_projecto)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->cod_projecto), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
	array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'Update') . ' ' . Projecto::label(); ?> <?php echo CHtml::encode($model) ?></legend>
    <?php echo $this->renderPartial('_form',array('model' => $model)); ?>
</fieldset>