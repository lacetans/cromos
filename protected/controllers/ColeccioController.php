<?php

class ColeccioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','repte','info','repte_usuari','usuaris_album','llistausuaris'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Coleccio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Coleccio']))
		{
			$model->attributes=$_POST['Coleccio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Coleccio']))
		{
			$model->attributes=$_POST['Coleccio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Coleccio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Coleccio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Coleccio']))
			$model->attributes=$_GET['Coleccio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Coleccio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Coleccio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Coleccio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='coleccio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionRepte()
	{
		$criteria=new CDbCriteria;
		$criteria->distinct = true;
		$criteria->select='*';
		$criteria->condition='usuari_id=:usuari';
		$criteria->params=array(':usuari'=>'1'); //en lloc del num s'ha de posar el ID d'usuari
		$post=Coleccio::model()->find($criteria);

		$dataProvider=new CActiveDataProvider('Coleccio',array('criteria'=>$criteria));
		$this->render('repte',array('dataProvider'=>$dataProvider));

	}

	public function actionInfo()
	{
		//$dataProvider=new CActiveDataProvider('Coleccio');
		$this->render('info');
	}

	public function actionRepte_usuari($id) //$id=album_id
	{
		// select usuari_id from coleccio where album_id=$id and usuari_id!=1 AND cromo_id not in(select cromo_id from coleccio where usuari_id=1)
		$criteria=new CDbCriteria;
		$criteria->distinct = true;
		$criteria->select='usuari_id';
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$id);
		//$criteria->params=array(':usuari_id'=>'1');
		$post=Coleccio::model()->find($criteria);
		
		$dataProvider=new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria
		));


		$connection=Yii::app()->db;
		$sql='select usuari_id from coleccio where album_id='.$id.' and usuari_id!=1 AND cromo_id not in(select cromo_id from coleccio where usuari_id=1 and album_id='.$id.')';
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();

		//print_r($rows);die();

		$llista = Array();

		//foreach ($dataProvider->data as $elem) {
		//	$llista[]=$elem->usuaris->login;
			//print_r($elem->usuaris->login);
		//}
		foreach ($rows as $r){
			$llista[]=$r['usuari_id'];
		}
		 //print_r($llista);die();

		$this->render('repte_usuari',array('llista'=>$llista));
		
	}
	public function actionReptar($id1,$id2)
	{
		print_r("reptar");die();
	}
}




















