<?php

Yii::import('application.models._base.BaseMembrosProjecto');

class MembrosProjecto extends BaseMembrosProjecto
{
    /**
     * @return MembrosProjecto
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'MembrosProjecto|MembrosProjectos', $n);
    }

}