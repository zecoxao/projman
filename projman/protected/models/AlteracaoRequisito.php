<?php

Yii::import('application.models._base.BaseAlteracaoRequisito');

class AlteracaoRequisito extends BaseAlteracaoRequisito
{
    /**
     * @return AlteracaoRequisito
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'AlteracaoRequisito|AlteracaoRequisitos', $n);
    }

}