<?php

Yii::import('application.models._base.BaseEntidade');

class Entidade extends BaseEntidade
{
    /**
     * @return Entidade
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Entidade|Entidades', $n);
    }

}