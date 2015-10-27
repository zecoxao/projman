<?php

Yii::import('application.models._base.BaseRequisito');

class Requisito extends BaseRequisito
{
    /**
     * @return Requisito
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Requisito|Requisitos', $n);
    }

}