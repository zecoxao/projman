<?php

/**
 * This is the model class for table "stakeholder_membro".
 *
 * The followings are the available columns in table 'stakeholder_membro':
 * @property integer $stakeholder
 * @property integer $membro
 */
class StakeholderMembro extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'stakeholder_membro';
    }

    public $nome_stakeholder;
    public $nome_membro;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('stakeholder, membro', 'required'),
            array('stakeholder, membro', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('stakeholder, membro', 'safe', 'on' => 'search'),
            array('nome_stakeholder', 'safe'),
            array('nome_membro', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'stakeholder1' => array(self::BELONGS_TO, 'Stakeholder', 'stakeholder'),
            'membro1' => array(self::BELONGS_TO, 'Membro', 'membro'),
            'pessoa1' => array(self::HAS_MANY, 'User', array('pessoa' => 'id'), 'through' => 'stakeholder1'),
            'pessoa2' => array(self::HAS_MANY, 'User', array('pessoa' => 'id'), 'through' => 'membro1'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'stakeholder' => 'Stakeholder',
            'membro' => 'Membro',
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

        $criteria->compare('stakeholder', $this->stakeholder);
        $criteria->compare('membro', $this->membro);

        $criteria->with = array('stakeholder1', 'pessoa1', 'membro1','pessoa2');
        $criteria->together = true;
        $criteria->compare('pessoa1.username', $this->nome_stakeholder, true);
        $criteria->compare('pessoa2.username', $this->nome_membro, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return StakeholderMembro the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
