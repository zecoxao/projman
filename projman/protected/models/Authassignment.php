<?php

Yii::import('application.models._base.BaseAuthassignment');

class Authassignment extends BaseAuthassignment
{
    /**
     * @return Authassignment
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Authassignment|Authassignments', $n);
    }

}