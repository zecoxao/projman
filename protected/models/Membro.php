<?php

Yii::import('application.models._base.BaseMembro');

class Membro extends BaseMembro
{
    /**
     * @return Membro
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Membro|Membros', $n);
    }

}