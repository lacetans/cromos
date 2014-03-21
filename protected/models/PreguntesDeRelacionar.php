<?php

/**
 * This is the model class for table "preguntes_de_relacionar".
 *
 * The followings are the available columns in table 'preguntes_de_relacionar':
 * @property integer $id
 * @property integer $pregunta_id
 * @property string $descripcio
 * @property string $pregunta_1
 * @property string $resposta_1
 * @property string $pregunta_2
 * @property string $resposta_2
 * @property string $pregunta_3
 * @property string $resposta_3
 * @property string $pregunta_4
 * @property string $resposta_4
 */
class PreguntesDeRelacionar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preguntes_de_relacionar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta_id, descripcio, pregunta_1, resposta_1, pregunta_2, resposta_2, pregunta_3, resposta_3, pregunta_4, resposta_4', 'required'),
			array('pregunta_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pregunta_id, descripcio, pregunta_1, resposta_1, pregunta_2, resposta_2, pregunta_3, resposta_3, pregunta_4, resposta_4', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pregunta_id' => 'Pregunta',
			'descripcio' => 'Descripcio_pregunta',
			'pregunta_1' => 'Pregunta 1',
			'resposta_1' => 'Resposta 1',
			'pregunta_2' => 'Pregunta 2',
			'resposta_2' => 'Resposta 2',
			'pregunta_3' => 'Pregunta 3',
			'resposta_3' => 'Resposta 3',
			'pregunta_4' => 'Pregunta 4',
			'resposta_4' => 'Resposta 4',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pregunta_id',$this->pregunta_id);
		$criteria->compare('descripcio',$this->descripcio,true);
		$criteria->compare('pregunta_1',$this->pregunta_1,true);
		$criteria->compare('resposta_1',$this->resposta_1,true);
		$criteria->compare('pregunta_2',$this->pregunta_2,true);
		$criteria->compare('resposta_2',$this->resposta_2,true);
		$criteria->compare('pregunta_3',$this->pregunta_3,true);
		$criteria->compare('resposta_3',$this->resposta_3,true);
		$criteria->compare('pregunta_4',$this->pregunta_4,true);
		$criteria->compare('resposta_4',$this->resposta_4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PreguntesDeRelacionar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
