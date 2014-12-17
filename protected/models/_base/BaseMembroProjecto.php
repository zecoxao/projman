<?php

/**
 * This is the model base class for the table "membro_projecto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MembroProjecto".
 *
 * Columns in table "membro_projecto" available as properties of the model,
 * followed by relations of table "membro_projecto" available as properties of the model.
 *
 * @property integer $id
 * @property integer $membro
 * @property integer $projecto
 *
 * @property Membro $membro0
 * @property Projecto $projecto0
 */
abstract class BaseMembroProjecto extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'membro_projecto';
    }

    public static function representingColumn() {
        return 'id';
    }

    public function rules() {
        return array(
            array('membro, projecto', 'required'),
            array('membro, projecto', 'numerical', 'integerOnly'=>true),
            array('id, membro, projecto', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'membro0' => array(self::BELONGS_TO, 'Membro', 'membro'),
            'projecto0' => array(self::BELONGS_TO, 'Projecto', 'projecto'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'membro' => Yii::t('app', 'Membro'),
                'projecto' => Yii::t('app', 'Projecto'),
                'membro0' => null,
                'projecto0' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('membro', $this->membro);
        $criteria->compare('projecto', $this->projecto);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_Membro($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('membro', $parentID);
        $criteria->compare('projecto', $this->projecto);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_Projecto($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('membro', $this->membro);
        $criteria->compare('projecto', $parentID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}