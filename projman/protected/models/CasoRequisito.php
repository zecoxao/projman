<?php

Yii::import('application.models._base.BaseCasoRequisito');

class CasoRequisito extends BaseCasoRequisito
{
    /**
     * @return CasoRequisito
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CasoRequisito|CasoRequisitos', $n);
    }

}