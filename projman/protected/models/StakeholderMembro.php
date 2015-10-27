<?php

Yii::import('application.models._base.BaseStakeholderMembro');

class StakeholderMembro extends BaseStakeholderMembro
{
    /**
     * @return StakeholderMembro
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'StakeholderMembro|StakeholderMembros', $n);
    }

}