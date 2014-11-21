<?php

Yii::import('application.models._base.BaseStakeholder');

class Stakeholder extends BaseStakeholder
{
    /**
     * @return Stakeholder
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Stakeholder|Stakeholders', $n);
    }

}