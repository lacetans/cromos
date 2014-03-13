<?php

class AlbumsController extends Controller
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
				'actions'=>array('create','update','alta_cromos'),
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
		$model=new Albums;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
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

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
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
		$dataProvider=new CActiveDataProvider('Albums');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Albums('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Albums']))
			$model->attributes=$_GET['Albums'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Albums the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Albums::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Albums $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='albums-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionAlta_cromos(){
		$usr = $_POST["usr"];  // usuari
		$ida = $_POST["ida"];  // id album
		$nc = $_POST["nc"];    // nombre de cromos
		$array_id = array(); // id's dels cromos
		array_push($array_id,$ida); // guardar id album a l'array

		for ($i=0; $i < $nc; $i++) { 
			// crear el cromo en la bd
			$sql = "INSERT INTO cromos(usuari_id, descripcio,aprovat, numeracio) VALUES(:usuari_id, :descripcio, :aprovat, :numeracio)";
			$com = Yii::app()->db->createCommand($sql);
			$com->bindValue("usuari_id",$usr);
			$com->bindValue("descripcio",0);
			$com->bindValue("aprovat",0);
			$com->bindValue("numeracio",0);
			$com->execute();

			// consultar la ultima id de cromos del usuari
			$idc = Yii::app()->db
				->createCommand("SELECT MAX(id) FROM cromos")
				->where("usuari_id=:usuari_id", array(":usuari_id"=>$usr))
				->queryScalar();

			// crear la relació album cromo en la db
			$sql = "INSERT INTO album_cromo_pagina(album_id, cromo_id, pagina_id) VALUES(:album_id, :cromo_id, :pagina_id)";
			$com = Yii::app()->db->createCommand($sql);
			$com->bindValue("album_id",$ida);
			$com->bindValue("cromo_id",$idc);
			$com->bindValue("pagina_id",0);
			$com->execute();

			// guardar la id del cromo a l'array
			array_push($array_id,$idc);
		}
		// donar informació a la pàgina web
		foreach ($array_id as $key => $value) {
			if($key==0){
				echo "<span id='cc_ida".$key."'>".$value."</span><br />";
			} else {
				echo "<span id='cc_idc".$key."'>".$value."</span><br />";
			}
		}
	}
}
