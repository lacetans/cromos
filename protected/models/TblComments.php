<?php

/**
 * This is the model class for table "tbl_comments".
 *
 * The followings are the available columns in table 'tbl_comments':
 * @property string $owner_name
 * @property integer $owner_id
 * @property integer $comment_id
 * @property integer $parent_comment_id
 * @property integer $creator_id
 * @property string $user_name
 * @property string $user_email
 * @property string $comment_text
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $status
 */
class TblComments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner_name, owner_id', 'required'),
			array('owner_id, parent_comment_id, creator_id, create_time, update_time, status', 'numerical', 'integerOnly'=>true),
			array('owner_name', 'length', 'max'=>50),
			array('user_name, user_email', 'length', 'max'=>128),
			array('comment_text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('owner_name, owner_id, comment_id, parent_comment_id, creator_id, user_name, user_email, comment_text, create_time, update_time, status', 'safe', 'on'=>'search'),
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
			'owner_name' => 'Owner Name',
			'owner_id' => 'Owner',
			'comment_id' => 'Comment',
			'parent_comment_id' => 'Parent Comment',
			'creator_id' => 'Creator',
			'user_name' => 'User Name',
			'user_email' => 'User Email',
			'comment_text' => 'Comment Text',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'status' => 'Status',
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

		$criteria->compare('owner_name',$this->owner_name,true);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('comment_id',$this->comment_id);
		$criteria->compare('parent_comment_id',$this->parent_comment_id);
		$criteria->compare('creator_id',$this->creator_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('comment_text',$this->comment_text,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblComments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
