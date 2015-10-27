<?php

Yii::import('application.models._base.BaseEcra');

class Ecra extends BaseEcra
{
    /**
     * @return Ecra
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Ecra|Ecras', $n);
    }

}