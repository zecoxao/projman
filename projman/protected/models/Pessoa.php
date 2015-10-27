<?php

Yii::import('application.models._base.BasePessoa');

class Pessoa extends BasePessoa
{
    /**
     * @return Pessoa
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Pessoa|Pessoas', $n);
    }

}