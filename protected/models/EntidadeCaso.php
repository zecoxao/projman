<?php

/**
 * This is the model class for table "entidade_caso".
 *
 * The followings are the available columns in table 'entidade_caso':
 * @property integer $entidade
 * @property integer $caso_uso
 */
class EntidadeCaso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entidade_caso';
	}
        
        public $descricao_entidade;
	public $nome_caso;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entidade, caso_uso', 'required'),
			array('entidade, caso_uso', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('entidade, caso_uso', 'safe', 'on'=>'search'),
                        array('descricao_entidade', 'safe'),
			array('nome_caso', 'safe'),
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
			'entidade0' => array(self::BELONGS_TO, 'Entidade', 'entidade'),
			'caso_uso0' => array(self::BELONGS_TO, 'CasoUso', 'caso_uso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'entidade' => 'Entidade',
			'caso_uso' => 'Caso Uso',
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

		$criteria->compare('entidade',$this->entidade);
		$criteria->compare('caso_uso',$this->caso_uso);
                
                $criteria->with = array('entidade0','caso_uso0');
		$criteria->addSearchCondition('entidade0.descricao', $this->descricao_entidade);
		$criteria->addSearchCondition('caso_uso0.nome', $this->nome_caso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EntidadeCaso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
