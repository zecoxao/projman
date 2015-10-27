<?php

Yii::import('application.models._base.BaseEntidadeCaso');

class EntidadeCaso extends BaseEntidadeCaso
{
    /**
     * @return EntidadeCaso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'EntidadeCaso|EntidadeCasos', $n);
    }

}