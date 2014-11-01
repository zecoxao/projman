<?php

/**
 * This is the model class for table "membro".
 *
 * The followings are the available columns in table 'membro':
 * @property integer $cod_membro
 * @property string $descricao
 * @property integer $user
 *
 * The followings are the available model relations:
 * @property Users $user0
 * @property CasoUso[] $casoUsos
 * @property Projecto[] $projectos
 * @property Stakeholder[] $stakeholders
 */
class Membro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'membro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, user', 'required'),
			array('user', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_membro, descricao, user', 'safe', 'on'=>'search'),
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
			'user0' => array(self::BELONGS_TO, 'Users', 'user'),
			'casoUsos' => array(self::MANY_MANY, 'CasoUso', 'membros_caso_uso(membro, caso_uso)'),
			'projectos' => array(self::MANY_MANY, 'Projecto', 'membros_projecto(membro, projecto)'),
			'stakeholders' => array(self::MANY_MANY, 'Stakeholder', 'stakeholder_membro(membro, stakeholder)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_membro' => 'Cod Membro',
			'descricao' => 'Descricao',
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

		$criteria->compare('cod_membro',$this->cod_membro);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('user',$this->user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Membro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
