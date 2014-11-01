<?php

/**
 * This is the model class for table "projecto".
 *
 * The followings are the available columns in table 'projecto':
 * @property integer $cod_projecto
 * @property string $descricao
 * @property string $data_inicio
 * @property string $data_fim
 * @property integer $duracao
 * @property string $ambito
 *
 * The followings are the available model relations:
 * @property Membro[] $membros
 * @property Requisitos[] $requisitoses
 */
class Projecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, data_inicio, data_fim, duracao, ambito', 'required'),
			array('duracao', 'numerical', 'integerOnly'=>true),
			array('descricao, ambito', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_projecto, descricao, data_inicio, data_fim, duracao, ambito', 'safe', 'on'=>'search'),
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
			'membros' => array(self::MANY_MANY, 'Membro', 'membros_projecto(projecto, membro)'),
			'requisitoses' => array(self::HAS_MANY, 'Requisitos', 'projecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_projecto' => 'Cod Projecto',
			'descricao' => 'Descricao',
			'data_inicio' => 'Data Inicio',
			'data_fim' => 'Data Fim',
			'duracao' => 'Duracao',
			'ambito' => 'Ambito',
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

		$criteria->compare('cod_projecto',$this->cod_projecto);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_fim',$this->data_fim,true);
		$criteria->compare('duracao',$this->duracao);
		$criteria->compare('ambito',$this->ambito,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
