<?php

Yii::import('application.models._base.BaseProfilesFields');

class ProfilesFields extends BaseProfilesFields
{
    /**
     * @return ProfilesFields
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ProfilesFields|ProfilesFields', $n);
    }

}