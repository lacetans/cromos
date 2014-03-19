<?php

/**
 * This is the model class for table "preguntes".
 *
 * The followings are the available columns in table 'preguntes':
 * @property integer $preguntes
 * @property integer $tipus
 * @property integer $aprovada
 */
class Preguntes extends CActiveRecord
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
			array('tipus, aprovada', 'required'),
			array('tipus, aprovada', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('preguntes, tipus, aprovada', 'safe', 'on'=>'search'),
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
			//'VarName'=>array('RelationType', 'ClassName', 'ForeignKey', ...additional options)
			'PreguntesDeRelacionar'=>array(self::HAS_ONE, 'PreguntesDeRelacionar', 'pregunta_id'),
			'PreguntesSiNo'=>array(self::HAS_ONE, 'PreguntesSiNo', 'pregunta_id'),
		
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
			'aprovada' => 'Aprovada',
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
		$criteria->compare('aprovada',$this->aprovada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Preguntes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
