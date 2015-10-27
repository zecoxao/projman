<?php

/**
 * This is the model base class for the table "caso_uso".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CasoUso".
 *
 * Columns in table "caso_uso" available as properties of the model,
 * followed by relations of table "caso_uso" available as properties of the model.
 *
 * @property integer $id
 * @property string $nome
 * @property string $dominio
 * @property string $nivel
 * @property string $actor_primario
 * @property string $pre_condicao
 * @property string $iniciador
 * @property string $cenario_sucesso
 *
 * @property EcraCaso[] $ecraCasos
 * @property EntidadeCaso[] $entidadeCasos
 * @property MembroCaso[] $membroCasos
 */
abstract class BaseCasoUso extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'caso_uso';
    }

    public static function representingColumn() {
        return 'nome';
    }

    public function rules() {
        return array(
            array('nome, dominio, nivel, actor_primario, pre_condicao, iniciador, cenario_sucesso', 'required'),
            array('nome, dominio, nivel, actor_primario, pre_condicao, iniciador', 'length', 'max'=>100),
            array('cenario_sucesso', 'length', 'max'=>500),
            array('id, nome, dominio, nivel, actor_primario, pre_condicao, iniciador, cenario_sucesso', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ecraCasos' => array(self::HAS_MANY, 'EcraCaso', 'caso_uso'),
            'entidadeCasos' => array(self::HAS_MANY, 'EntidadeCaso', 'caso_uso'),
            'membroCasos' => array(self::HAS_MANY, 'MembroCaso', 'caso_uso'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nome' => Yii::t('app', 'Nome'),
                'dominio' => Yii::t('app', 'Dominio'),
                'nivel' => Yii::t('app', 'Nivel'),
                'actor_primario' => Yii::t('app', 'Actor Primario'),
                'pre_condicao' => Yii::t('app', 'Pre Condicao'),
                'iniciador' => Yii::t('app', 'Iniciador'),
                'cenario_sucesso' => Yii::t('app', 'Cenario Sucesso'),
                'ecraCasos' => null,
                'entidadeCasos' => null,
                'membroCasos' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nome', $this->nome, true);
        $criteria->compare('dominio', $this->dominio, true);
        $criteria->compare('nivel', $this->nivel, true);
        $criteria->compare('actor_primario', $this->actor_primario, true);
        $criteria->compare('pre_condicao', $this->pre_condicao, true);
        $criteria->compare('iniciador', $this->iniciador, true);
        $criteria->compare('cenario_sucesso', $this->cenario_sucesso, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}