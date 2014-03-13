<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $login
 * @property integer $email
 * @property integer $password
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('password' 'numerical', 'integerOnly'=>true),
			array('email','email'),
			//array('login', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, login, email, password', 'safe', 'on'=>'search'),
		);
	}

	/**
   * Returns User model by its email
   * 
   * @param string $email 
   * @access public
   * @return User
   */
  public function findByEmail($email)
  {
    return self::model()->findByAttributes(array('email' => $email));
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

public function validatePassword($attribute,$params)
	{
		if(HOAuthAction::$useYiiUser)
		{
			$user = User::model()->notsafe()->findByAttributes(array('email'=>$this->email));
			$valid = Yii::app()->getModule('user')->encrypting($this->password) === $user->password;
		}else{
			$user = $this->_model->findByEmail($this->email);
			if(method_exists($this->_model, 'verifyPassword'))
				$valid = $user->verifyPassword($this->password);
			elseif(method_exists($this->_model, 'validatePassword'))
				$valid = $user->validatePassword($this->password);
			else
				throw new CException('You need to implement verifyPassword($password) or validatePassword($password) method in order to let hoauth validate user password.');
		}

		if($valid)
			// setting up the current model, to use it later in HOAuthAction
			$this->_model = $user;
		else
			$this->addError('password', HOAuthAction::t('Sorry, but password is incorrect'));
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'login' => 'Login',
			'email' => 'Email',
			'password' => 'Password',
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
		$criteria->compare('login',$this->login,true);
		$criteria->compare('email',$this->email);
		$criteria->compare('password',$this->password);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

