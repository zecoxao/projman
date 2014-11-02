<?php

/**
 * This is the model class for table "requisitos_stakeholders".
 *
 * The followings are the available columns in table 'requisitos_stakeholders':
 * @property integer $requisito
 * @property integer $stakeholder
 */
class RequisitosStakeholders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'requisitos_stakeholders';
	}
        
        public $nome_stakeholder;
	public $descricao_requisito;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('requisito, stakeholder', 'required'),
			array('requisito, stakeholder', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('requisito, stakeholder', 'safe', 'on'=>'search'),
                        array('nome_stakeholder', 'safe'),
			array('descricao_requisito', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'stakeholder1' => array(self::BELONGS_TO, 'Stakeholder', 'stakeholder'),
			'requisitoses1' => array(self::BELONGS_TO, 'Requisitos', 'requisito'),
                        'pessoa1'    => array(self::HAS_MANY, 'Pessoa', array('pessoa'=>'cod_pessoa'),'through'=>'stakeholder1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'requisito' => 'Requisito',
			'stakeholder' => 'Stakeholder',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('requisito',$this->requisito);
		$criteria->compare('stakeholder',$this->stakeholder);
                
                $criteria->with = array('stakeholder1','pessoa1','requisitoses1');
		$criteria->together=true;
		$criteria->compare('pessoa1.nome',$this->nome_stakeholder,true);
                $criteria->addSearchCondition('requisitoses1.descricao', $this->descricao_requisito);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RequisitosStakeholders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
