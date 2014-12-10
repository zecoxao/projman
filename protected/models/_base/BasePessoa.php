<?php

/**
 * This is the model base class for the table "pessoa".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Pessoa".
 *
 * Columns in table "pessoa" available as properties of the model,
 * followed by relations of table "pessoa" available as properties of the model.
 *
 * @property integer $id
 * @property string $nome
 * @property string $morada
 * @property integer $tlm
 * @property string $data_nascimento
 *
 * @property Cliente[] $clientes
 * @property Membro[] $membros
 * @property Stakeholder[] $stakeholders
 */
abstract class BasePessoa extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'pessoa';
    }

    public static function representingColumn() {
        return 'nome';
    }

    public function rules() {
        return array(
            array('nome, morada, tlm, data_nascimento', 'required'),
            array('tlm', 'numerical', 'integerOnly'=>true),
            array('nome', 'length', 'max'=>100),
            array('morada', 'length', 'max'=>150),
            array('id, nome, morada, tlm, data_nascimento', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'clientes' => array(self::HAS_MANY, 'Cliente', 'pessoa'),
            'membros' => array(self::HAS_MANY, 'Membro', 'pessoa'),
            'stakeholders' => array(self::HAS_MANY, 'Stakeholder', 'pessoa'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nome' => Yii::t('app', 'Nome'),
                'morada' => Yii::t('app', 'Morada'),
                'tlm' => Yii::t('app', 'Tlm'),
                'data_nascimento' => Yii::t('app', 'Data Nascimento'),
                'clientes' => null,
                'membros' => null,
                'stakeholders' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nome', $this->nome, true);
        $criteria->compare('morada', $this->morada, true);
        $criteria->compare('tlm', $this->tlm);
        $criteria->compare('data_nascimento', $this->data_nascimento, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}