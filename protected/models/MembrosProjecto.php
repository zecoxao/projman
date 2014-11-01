<?php

/**
 * This is the model class for table "membros_projecto".
 *
 * The followings are the available columns in table 'membros_projecto':
 * @property integer $projecto
 * @property integer $membro
 */
class MembrosProjecto extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'membros_projecto';
    }

    public $nome_membro;
    public $descricao_projecto;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('projecto, membro', 'required'),
            array('projecto, membro', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('projecto, membro', 'safe', 'on' => 'search'),
            array('nome_membro', 'safe'),
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
            'membro0' => array(self::BELONGS_TO, 'Membro', 'membro'),
            'projecto0' => array(self::BELONGS_TO, 'Projecto', 'projecto'),
            'pessoa1' => array(self::HAS_MANY, 'User', array('pessoa' => 'id'), 'through' => 'membro0'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'projecto' => 'Projecto',
            'membro' => 'Membro',
            'nome_membro' => 'Nome de Membro',
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

        $criteria->compare('projecto', $this->projecto);
        $criteria->compare('membro', $this->membro);
        
        $criteria->with = array('membro0','pessoa1','projecto0');
        $criteria->together = true;
        $criteria->compare('pessoa1.username', $this->nome_membro, true);
        $criteria->addSearchCondition('projecto0.descricao', $this->descricao_projecto);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MembrosProjecto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
