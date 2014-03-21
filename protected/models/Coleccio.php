<?php

/**
 * This is the model class for table "coleccio".
 *
 * The followings are the available columns in table 'coleccio':
 * @property integer $id
 * @property integer $album_id
 * @property integer $cromo_id
 * @property integer $usuari_id
 * @property integer $vegades
 */
class Coleccio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coleccio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('album_id, cromo_id, usuari_id, vegades', 'required'),
			array('album_id, cromo_id, usuari_id, vegades', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, album_id, cromo_id, usuari_id, vegades', 'safe', 'on'=>'search'),
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
		 'cromos'=>array(self::BELONGS_TO,'Cromos','cromo_id'),  //Muchos_a_1
		 'albums'=>array(self::BELONGS_TO,'Albums','album_id'),
		 'AlbumCromoPagina'=>array(self::BELONGS_TO,'album_cromo_pagina','album_id')
		 //'cromoCount'=>array(self::STAT,'Cromos','cromo_id')    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'album_id' => 'Album',
			'cromo_id' => 'Cromo',
			'usuari_id' => 'Usuari',
			'vegades' => 'Vegades',
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
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('cromo_id',$this->cromo_id);
		$criteria->compare('usuari_id',$this->usuari_id);
		$criteria->compare('vegades',$this->vegades);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coleccio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
