<?php

/**
 * This is the model class for table "comentaris".
 *
 * The followings are the available columns in table 'comentaris':
 * @property integer $id
 * @property integer $tipus
 * @property string $text
 * @property integer $id_extern
 * @property integer $pare
 */
class Comentaris extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentaris';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('text', 'required'),
			array('tipus, id_extern, pare', 'numerical', 'integerOnly'=>true),
			array('text', 'length', 'max'=>65000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipus, text, id_extern, pare', 'safe', 'on'=>'search'),
		);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		  //Muchos_a_1
		return array(
			'TblComments'=>array(self::BELONGS_TO,'TblComments','comment_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipus' => 'Tipus',
			'text' => 'Text',
			'id_extern' => 'Id Extern',
			'pare' => 'Pare',
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
		$criteria->compare('tipus',$this->tipus);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('id_extern',$this->id_extern);
		$criteria->compare('pare',$this->pare);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentaris the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
