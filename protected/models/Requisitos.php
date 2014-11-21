<?php

Yii::import('application.models._base.BaseRequisitos');

class Requisitos extends BaseRequisitos
{
    /**
     * @return Requisitos
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Requisitos|Requisitoses', $n);
    }

}