<?php

Yii::import('application.models._base.BaseGrupoAnalise');

class GrupoAnalise extends BaseGrupoAnalise
{
    /**
     * @return GrupoAnalise
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'GrupoAnalise|GrupoAnalises', $n);
    }

}