<?php

Yii::import('application.models._base.BaseMembroProjecto');

class MembroProjecto extends BaseMembroProjecto
{
    /**
     * @return MembroProjecto
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'MembroProjecto|MembroProjectos', $n);
    }

}