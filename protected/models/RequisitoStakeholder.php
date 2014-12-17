<?php

Yii::import('application.models._base.BaseRequisitoStakeholder');

class RequisitoStakeholder extends BaseRequisitoStakeholder
{
    /**
     * @return RequisitoStakeholder
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'RequisitoStakeholder|RequisitoStakeholders', $n);
    }

}