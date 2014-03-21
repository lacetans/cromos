<?php

/**
 * This is the model class for table "preguntes_youtube".
 *
 * The followings are the available columns in table 'preguntes_youtube':
 * @property integer $id
 * @property string $pregunta
 * @property string $resposta
 * @property integer $inici_video
 * @property integer $fi_video
 * @property integer $pregunta_id
 * @property string $video
 */
class PreguntesYoutube extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preguntes_youtube';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta, resposta, pregunta_id', 'required'),
			array('inici_video, fi_video, pregunta_id', 'numerical', 'integerOnly'=>true),
			array('pregunta, resposta, video', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pregunta, resposta, inici_video, fi_video, pregunta_id, video', 'safe', 'on'=>'search'),
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
			'resposta' => 'Resposta',
			'inici_video' => 'Inici Video',
			'fi_video' => 'Fi Video',
			'pregunta_id' => 'Pregunta',
			'video' => 'Video',
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
		$criteria->compare('resposta',$this->resposta,true);
		$criteria->compare('inici_video',$this->inici_video);
		$criteria->compare('fi_video',$this->fi_video);
		$criteria->compare('pregunta_id',$this->pregunta_id);
		$criteria->compare('video',$this->video,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PreguntesYoutube the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
