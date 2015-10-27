<?php

Yii::import('application.models._base.BaseMembroCaso');

class MembroCaso extends BaseMembroCaso
{
    /**
     * @return MembroCaso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'MembroCaso|MembroCasos', $n);
    }

}