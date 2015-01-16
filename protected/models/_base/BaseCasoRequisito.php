<?php

/**
 * This is the model base class for the table "caso_requisito".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CasoRequisito".
 *
 * Columns in table "caso_requisito" available as properties of the model,
 * followed by relations of table "caso_requisito" available as properties of the model.
 *
 * @property integer $id
 * @property integer $caso_uso
 * @property integer $requisito
 *
 * @property CasoUso $casoUso
 * @property Requisito $requisito0
 */
abstract class BaseCasoRequisito extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'caso_requisito';
    }

    public static function representingColumn() {
        return 'id';
    }

    public function rules() {
        return array(
            array('caso_uso, requisito', 'required'),
            array('caso_uso, requisito', 'numerical', 'integerOnly'=>true),
            array('id, caso_uso, requisito', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'casoUso' => array(self::BELONGS_TO, 'CasoUso', 'caso_uso'),
            'requisito0' => array(self::BELONGS_TO, 'Requisito', 'requisito'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'caso_uso' => Yii::t('app', 'Caso Uso'),
                'requisito' => Yii::t('app', 'Requisito'),
                'casoUso' => null,
                'requisito0' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('caso_uso', $this->caso_uso);
        $criteria->compare('requisito', $this->requisito);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_Caso($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('caso_uso', $parentID);
        $criteria->compare('requisito', $this->requisito);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_Requisito($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('caso_uso', $this->caso_uso);
        $criteria->compare('requisito', $parentID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}