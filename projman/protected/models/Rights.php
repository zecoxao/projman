<?php

Yii::import('application.models._base.BaseRights');

class Rights extends BaseRights
{
    /**
     * @return Rights
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Rights|Rights', $n);
    }

}