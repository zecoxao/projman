<?php

/**
 * This is the model class for table "alteracao".
 *
 * The followings are the available columns in table 'alteracao':
 * @property integer $cod_alteracao
 * @property integer $stakeholder
 * @property string $data_alteracao
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property Stakeholder $stakeholder0
 * @property Requisitos[] $requisitoses
 */
class Alteracao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alteracao';
	}
	
	public $nome_stakeholder;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stakeholder, data_alteracao, descricao', 'required'),
			array('stakeholder', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_alteracao, stakeholder, data_alteracao, descricao', 'safe', 'on'=>'search'),
			array('nome_stakeholder', 'safe'),
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
			'stakeholder0' => array(self::BELONGS_TO, 'Stakeholder', 'stakeholder'),
			'requisitoses' => array(self::MANY_MANY, 'Requisitos', 'alteracoes_requisito(alteracao, requisito)'),
			'pessoa1' => array(self::HAS_MANY, 'User', array('pessoa' => 'id'), 'through' =>'stakeholder0'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_alteracao' => 'Cod Alteracao',
			'stakeholder' => 'Stakeholder',
			'data_alteracao' => 'Data Alteracao',
			'descricao' => 'Descricao',
			'nome_stakeholder' => 'Nome de Stakeholder',
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

		$criteria->compare('cod_alteracao',$this->cod_alteracao);
		$criteria->compare('stakeholder',$this->stakeholder);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);
		$criteria->compare('t.descricao',$this->descricao,true);
		
		$criteria->with = array('stakeholder0','pessoa1');
		$criteria->together=true;
		$criteria->compare('pessoa1.username',$this->nome_stakeholder,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alteracao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
