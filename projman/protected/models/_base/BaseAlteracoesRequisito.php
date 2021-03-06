<?php

/**
 * This is the model base class for the table "alteracoes_requisito".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AlteracoesRequisito".
 *
 * Columns in table "alteracoes_requisito" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $alteracao
 * @property integer $requisito
 *
 */
abstract class BaseAlteracoesRequisito extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'alteracoes_requisito';
    }

    public static function representingColumn() {
        return array(
            'alteracao',
            'requisito',
        );
    }

    public function rules() {
        return array(
            array('alteracao, requisito', 'required'),
            array('alteracao, requisito', 'numerical', 'integerOnly'=>true),
            array('alteracao, requisito', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'alteracao' => Yii::t('app', 'Alteracao'),
                'requisito' => Yii::t('app', 'Requisito'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('alteracao', $this->alteracao);
        $criteria->compare('requisito', $this->requisito);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}