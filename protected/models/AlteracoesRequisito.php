<?php

/**
 * This is the model class for table "alteracoes_requisito".
 *
 * The followings are the available columns in table 'alteracoes_requisito':
 * @property integer $alteracao
 * @property integer $requisito
 */
class AlteracoesRequisito extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alteracoes_requisito';
	}
	
	public $descricao_alteracao;
	public $descricao_requisito;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alteracao, requisito', 'required'),
			array('alteracao, requisito', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('alteracao, requisito', 'safe', 'on'=>'search'),
			array('descricao_alteracao', 'safe'),
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
			'alteracao0' => array(self::BELONGS_TO, 'Alteracao', 'alteracao'),
			'requisitoses0' => array(self::BELONGS_TO, 'Requisitos', 'requisito'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'alteracao' => 'Alteracao',
			'requisitos' => 'Requisitos',
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

		$criteria->compare('alteracao',$this->alteracao);
		$criteria->compare('requisito',$this->requisito);
		
		$criteria->with = array('alteracao0','requisitoses0');
		$criteria->addSearchCondition('alteracao0.descricao', $this->descricao_alteracao);
		$criteria->addSearchCondition('requisitoses0.descricao', $this->descricao_requisito);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlteracoesRequisito the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
