<?php

Yii::import('application.models._base.BaseMembrosCasoUso');

class MembrosCasoUso extends BaseMembrosCasoUso
{
    /**
     * @return MembrosCasoUso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'MembrosCasoUso|MembrosCasoUsos', $n);
    }

}