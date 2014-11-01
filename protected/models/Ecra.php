<?php

/**
 * This is the model class for table "ecra".
 *
 * The followings are the available columns in table 'ecra':
 * @property integer $cod_ecra
 * @property string $descricao
 * @property string $modelo_ecra
 *
 * The followings are the available model relations:
 * @property CasoUso[] $casoUsos
 */
class Ecra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ecra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, modelo_ecra', 'required'),
			array('descricao', 'length', 'max'=>100),
			array('modelo_ecra', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_ecra, descricao, modelo_ecra', 'safe', 'on'=>'search'),
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
			'casoUsos' => array(self::MANY_MANY, 'CasoUso', 'ecra_caso(ecra, caso_uso)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_ecra' => 'Cod Ecra',
			'descricao' => 'Descricao',
			'modelo_ecra' => 'Modelo Ecra',
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

		$criteria->compare('cod_ecra',$this->cod_ecra);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('modelo_ecra',$this->modelo_ecra,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ecra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
