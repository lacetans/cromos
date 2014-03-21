<?php

/**
 * This is the model class for table "album_cromo_pagina".
 *
 * The followings are the available columns in table 'album_cromo_pagina':
 * @property integer $id
 * @property integer $album_id
 * @property integer $cromo_id
 * @property integer $pagina_id
 */
class AlbumCromoPagina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'album_cromo_pagina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('album_id, cromo_id, pagina_id', 'required'),
			array('album_id, cromo_id, pagina_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, album_id, cromo_id, pagina_id', 'safe', 'on'=>'search'),
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
		 'coleccio'=>array(self::BELONGS_TO,'Coleccio','album_id')
		 );  //Muchos_a_1

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
			'pagina_id' => 'Pagina',
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
		$criteria->compare('pagina_id',$this->pagina_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlbumCromoPagina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
