<?php

Yii::import('application.models._base.BaseAuthitemchild');

class Authitemchild extends BaseAuthitemchild
{
    /**
     * @return Authitemchild
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Authitemchild|Authitemchildren', $n);
    }

}