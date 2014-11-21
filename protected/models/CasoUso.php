<?php

Yii::import('application.models._base.BaseCasoUso');

class CasoUso extends BaseCasoUso
{
    /**
     * @return CasoUso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CasoUso|CasoUsos', $n);
    }

}