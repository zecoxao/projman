<?php

/**
 * This is the model base class for the table "estado".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Estado".
 *
 * Columns in table "estado" available as properties of the model,
 * followed by relations of table "estado" available as properties of the model.
 *
 * @property integer $id
 * @property string $descricao
 *
 * @property Requisito[] $requisitos
 */
abstract class BaseEstado extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'estado';
    }

    public static function representingColumn() {
        return 'descricao';
    }

    public function rules() {
        return array(
            array('descricao', 'required'),
            array('descricao', 'length', 'max'=>100),
            array('id, descricao', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'requisitos' => array(self::HAS_MANY, 'Requisito', 'estado'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'descricao' => Yii::t('app', 'Descricao'),
                'requisitos' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('descricao', $this->descricao, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}