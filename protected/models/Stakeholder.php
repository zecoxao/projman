<?php

/**
 * This is the model class for table "stakeholder".
 *
 * The followings are the available columns in table 'stakeholder':
 * @property integer $cod_stakeholder
 * @property string $descricao
 * @property integer $grupo
 * @property integer $cliente
 * @property integer $user
 *
 * The followings are the available model relations:
 * @property Alteracao[] $alteracaos
 * @property Requisitos[] $requisitoses
 * @property GrupoAnalise $grupo0
 * @property Cliente $cliente0
 * @property Users $user0
 * @property Membro[] $membros
 */
class Stakeholder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stakeholder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, grupo, cliente, user', 'required'),
			array('grupo, cliente, user', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_stakeholder, descricao, grupo, cliente, user', 'safe', 'on'=>'search'),
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
			'alteracaos' => array(self::HAS_MANY, 'Alteracao', 'stakeholder'),
			'requisitoses' => array(self::MANY_MANY, 'Requisitos', 'requisitos_stakeholders(stakeholder, requisito)'),
			'grupo0' => array(self::BELONGS_TO, 'GrupoAnalise', 'grupo'),
			'cliente0' => array(self::BELONGS_TO, 'Cliente', 'cliente'),
			'user0' => array(self::BELONGS_TO, 'Users', 'user'),
			'membros' => array(self::MANY_MANY, 'Membro', 'stakeholder_membro(stakeholder, membro)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_stakeholder' => 'Cod Stakeholder',
			'descricao' => 'Descricao',
			'grupo' => 'Grupo',
			'cliente' => 'Cliente',
			'user' => 'User',
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

		$criteria->compare('cod_stakeholder',$this->cod_stakeholder);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('grupo',$this->grupo);
		$criteria->compare('cliente',$this->cliente);
		$criteria->compare('user',$this->user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stakeholder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
