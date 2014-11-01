<?php

/**
 * This is the model class for table "requisitos".
 *
 * The followings are the available columns in table 'requisitos':
 * @property integer $cod_requisito
 * @property integer $projecto
 * @property string $descricao
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Alteracao[] $alteracaos
 * @property Projecto $projecto0
 * @property Estado $estado0
 * @property Stakeholder[] $stakeholders
 */
class Requisitos extends CActiveRecord {

    public $descricao_estado;
    public $descricao_projecto;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'requisitos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('projecto, descricao, estado', 'required'),
            array('projecto, estado', 'numerical', 'integerOnly' => true),
            array('descricao', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cod_requisito, projecto, descricao, estado', 'safe', 'on' => 'search'),
            array('descricao_estado', 'safe'),
            array('descricao_projecto', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'alteracaos' => array(self::MANY_MANY, 'Alteracao', 'alteracoes_requisito(requisito, alteracao)'),
            'projecto0' => array(self::BELONGS_TO, 'Projecto', 'projecto'),
            'estado0' => array(self::BELONGS_TO, 'Estado', 'estado'),
            'stakeholders' => array(self::MANY_MANY, 'Stakeholder', 'requisitos_stakeholders(requisito, stakeholder)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'cod_requisito' => 'Cod Requisito',
            'projecto' => 'Projecto',
            'descricao' => 'Descricao',
            'estado' => 'Estado',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('cod_requisito', $this->cod_requisito);
        $criteria->compare('projecto', $this->projecto);
        $criteria->compare('descricao', $this->descricao, true);
        $criteria->compare('estado', $this->estado);


        $criteria->with = array('estado0', 'projecto0',);
        $criteria->addSearchCondition('estado0.descricao', $this->descricao_estado);
        $criteria->addSearchCondition('projecto0.descricao', $this->descricao_projecto);


        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Requisitos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
