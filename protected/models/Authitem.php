<?php

Yii::import('application.models._base.BaseAuthitem');

class Authitem extends BaseAuthitem
{
    /**
     * @return Authitem
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Authitem|Authitems', $n);
    }

}