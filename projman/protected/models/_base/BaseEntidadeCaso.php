<?php

/**
 * This is the model base class for the table "entidade_caso".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EntidadeCaso".
 *
 * Columns in table "entidade_caso" available as properties of the model,
 * followed by relations of table "entidade_caso" available as properties of the model.
 *
 * @property integer $id
 * @property integer $entidade
 * @property integer $caso_uso
 *
 * @property Entidade $entidade0
 * @property CasoUso $casoUso
 */
abstract class BaseEntidadeCaso extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'entidade_caso';
    }

    public static function representingColumn() {
        return 'id';
    }

    public function rules() {
        return array(
            array('entidade, caso_uso', 'required'),
            array('entidade, caso_uso', 'numerical', 'integerOnly'=>true),
            array('id, entidade, caso_uso', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'entidade0' => array(self::BELONGS_TO, 'Entidade', 'entidade'),
            'casoUso' => array(self::BELONGS_TO, 'CasoUso', 'caso_uso'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'entidade' => Yii::t('app', 'Entidade'),
                'caso_uso' => Yii::t('app', 'Caso Uso'),
                'entidade0' => null,
                'casoUso' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('entidade', $this->entidade);
        $criteria->compare('caso_uso', $this->caso_uso);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function search_Entidade($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('entidade', $parentID);
        $criteria->compare('caso_uso', $this->caso_uso);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_Caso($parentID) {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('entidade', $this->entidade);
        $criteria->compare('caso_uso', $parentID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}