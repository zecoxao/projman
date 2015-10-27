<?php

Yii::import('application.models._base.BaseRequisitosStakeholders');

class RequisitosStakeholders extends BaseRequisitosStakeholders
{
    /**
     * @return RequisitosStakeholders
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'RequisitosStakeholders|RequisitosStakeholders', $n);
    }

}