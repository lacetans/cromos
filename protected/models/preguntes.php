<?php

/**
 * This is the model class for table "preguntes".
 *
 * The followings are the available columns in table 'preguntes':
 * @property integer $preguntes
 * @property integer $tipus
 */
class preguntes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preguntes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipus', 'required'),
			array('tipus', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('preguntes, tipus', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			
			/*Relacions_Preguntes*/
			'p_relacionar' => array(self::HAS_MANY, 'preguntes_de_relacionar', 'pregunta_id'),
			'p_si_no' => array(self::HAS_MANY, 'preguntes_si_no', 'pregunta_id'),
			'p_hospot' => array(self::HAS_MANY, 'preguntes_hospot', 'pregunta_id'),
			'p_omplir_blancs' => array(self::HAS_MANY, 'preguntes_omplir_blancs', 'pregunta_id'),
			'p_youtube' => array(self::HAS_MANY, 'preguntes_youtube', 'pregunta_id'),
			'p_op_mult_resp_unic' => array(self::HAS_MANY, 'preguntes_opcio_multiple_resposta_unica', 'pregunta_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'preguntes' => 'Preguntes',
			'tipus' => 'Tipus',
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

		$criteria->compare('preguntes',$this->preguntes);
		$criteria->compare('tipus',$this->tipus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return preguntes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
