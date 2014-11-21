<?php

Yii::import('application.models._base.BaseEcraCaso');

class EcraCaso extends BaseEcraCaso
{
    /**
     * @return EcraCaso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'EcraCaso|EcraCasos', $n);
    }

}