<?php

Yii::import('application.models._base.BaseProfiles');

class Profiles extends BaseProfiles
{
    /**
     * @return Profiles
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Profiles|Profiles', $n);
    }

}