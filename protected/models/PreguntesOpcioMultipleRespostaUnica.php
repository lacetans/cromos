<?php

/**
 * This is the model class for table "preguntes_opcio_multiple_resposta_unica".
 *
 * The followings are the available columns in table 'preguntes_opcio_multiple_resposta_unica':
 * @property integer $id
 * @property string $pregunta
 * @property string $resposta_correcta
 * @property string $resposta_2
 * @property string $resposta_3
 * @property string $resposta_4
 * @property integer $pregunta_id
 */
class PreguntesOpcioMultipleRespostaUnica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preguntes_opcio_multiple_resposta_unica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta, resposta_correcta, resposta_2, resposta_3, resposta_4, pregunta_id', 'required'),
			array('pregunta_id', 'numerical', 'integerOnly'=>true),
			array('pregunta, resposta_correcta, resposta_2, resposta_3, resposta_4', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pregunta, resposta_correcta, resposta_2, resposta_3, resposta_4, pregunta_id', 'safe', 'on'=>'search'),
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
			'pregunta' => 'Pregunta',
			'resposta_correcta' => 'Resposta Correcta',
			'resposta_2' => 'Resposta 2',
			'resposta_3' => 'Resposta 3',
			'resposta_4' => 'Resposta 4',
			'pregunta_id' => 'Pregunta_id',
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
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('resposta_correcta',$this->resposta_correcta,true);
		$criteria->compare('resposta_2',$this->resposta_2,true);
		$criteria->compare('resposta_3',$this->resposta_3,true);
		$criteria->compare('resposta_4',$this->resposta_4,true);
		$criteria->compare('pregunta_id',$this->pregunta_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PreguntesOpcioMultipleRespostaUnica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
