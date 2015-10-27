<?php

Yii::import('application.models._base.BaseAlteracao');

class Alteracao extends BaseAlteracao
{
    /**
     * @return Alteracao
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Alteracao|Alteracaos', $n);
    }

}