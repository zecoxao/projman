<?php

Yii::import('application.models._base.BaseAlteracoesRequisito');

class AlteracoesRequisito extends BaseAlteracoesRequisito
{
    /**
     * @return AlteracoesRequisito
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'AlteracoesRequisito|AlteracoesRequisitos', $n);
    }

}