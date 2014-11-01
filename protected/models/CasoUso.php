<?php

/**
 * This is the model class for table "caso_uso".
 *
 * The followings are the available columns in table 'caso_uso':
 * @property integer $cod_caso_uso
 * @property string $nome
 * @property string $dominio
 * @property string $nivel
 * @property string $actor_primario
 * @property string $pre_condicao
 * @property string $iniciador
 * @property string $cenario_sucesso
 *
 * The followings are the available model relations:
 * @property Ecra[] $ecras
 * @property Entidade[] $entidades
 * @property Membro[] $membros
 */
class CasoUso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caso_uso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, dominio, nivel, actor_primario, pre_condicao, iniciador, cenario_sucesso', 'required'),
			array('nome, dominio, nivel, actor_primario, pre_condicao, iniciador', 'length', 'max'=>100),
			array('cenario_sucesso', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_caso_uso, nome, dominio, nivel, actor_primario, pre_condicao, iniciador, cenario_sucesso', 'safe', 'on'=>'search'),
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
			'ecras' => array(self::MANY_MANY, 'Ecra', 'ecra_caso(caso_uso, ecra)'),
			'entidades' => array(self::MANY_MANY, 'Entidade', 'entidade_caso(caso_uso, entidade)'),
			'membros' => array(self::MANY_MANY, 'Membro', 'membros_caso_uso(caso_uso, membro)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_caso_uso' => 'Cod Caso Uso',
			'nome' => 'Nome',
			'dominio' => 'Dominio',
			'nivel' => 'Nivel',
			'actor_primario' => 'Actor Primario',
			'pre_condicao' => 'Pre Condicao',
			'iniciador' => 'Iniciador',
			'cenario_sucesso' => 'Cenario Sucesso',
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

		$criteria->compare('cod_caso_uso',$this->cod_caso_uso);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('dominio',$this->dominio,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('actor_primario',$this->actor_primario,true);
		$criteria->compare('pre_condicao',$this->pre_condicao,true);
		$criteria->compare('iniciador',$this->iniciador,true);
		$criteria->compare('cenario_sucesso',$this->cenario_sucesso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CasoUso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
