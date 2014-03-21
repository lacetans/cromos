<?php

class AlbumCromoPaginaController extends Controller
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
				'actions'=>array('create','update','CromosTotals','Numeracio'),
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
		$model=new AlbumCromoPagina;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AlbumCromoPagina']))
		{
			$model->attributes=$_POST['AlbumCromoPagina'];
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

		if(isset($_POST['AlbumCromoPagina']))
		{
			$model->attributes=$_POST['AlbumCromoPagina'];
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
		$dataProvider=new CActiveDataProvider('AlbumCromoPagina');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AlbumCromoPagina('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AlbumCromoPagina']))
			$model->attributes=$_GET['AlbumCromoPagina'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AlbumCromoPagina the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AlbumCromoPagina::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AlbumCromoPagina $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='album-cromo-pagina-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function CromosTotals()
	{   
		//Total de cromos que te un album
		$album_id=1;
		$criteria=new CDbCriteria;
		$criteria->select='*';  // seleccionar solo la columna 'title'
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		//$dataProvider=Coleccio::model()->find($criteria); // $params no es necesario
		
		$dataProvider = new CActiveDataProvider('AlbumCromoPagina',array(
			'criteria'=>$criteria
		));
		//print_r($dataProvider);die();
		//mostrar el num de cromos que te l'album.
		$cromos_total_album=$dataProvider->totalItemCount;
		//print($cromos_totals);die();
		return($cromos_total_album);
		
		//echo $dataProvider->totalItemCount;die(); //total de cromos que hi ha en el album
	}
	
	public function CromosFalten()
	{   
		//Cromos que li falta al usuari per completar el album album
		$album_id=1;
		$criteria=new CDbCriteria;
		$criteria->select='*';  // seleccionar solo la columna 'title'
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		//$dataProvider=Coleccio::model()->find($criteria); // $params no es necesario
		
		$dataProvider = new CActiveDataProvider('AlbumCromoPagina',array(
			'criteria'=>$criteria
		));
		//print_r($dataProvider);die();
		//mostrar el num de cromos que te l'album.
		//$cromos_total_album=$dataProvider->totalItemCount;
		//print($cromos_totals);die();
		//return($cromos_total_album);
		
		//echo $dataProvider->totalItemCount;die(); //total de cromos que hi ha en el album
		 $llista_cromos_falten = Array();

        foreach($dataProvider->data as $data){ 
            $llista_cromos_falten[$data->id]=$data->descripcio; 
            //$llista[]=array("0"=>$data->numeracio,"1"=>$data->descripcio); 
        }
		return($llista_cromos_falten);
        //print_r($llista_cromos_falten);die();
		
		
		

	}
	
	public function Numeracio($album_id)
	{   
		//Ordenar els cromos per numeracio de menys a mes
		$numeracio=1;
		$criteria=new CDbCriteria;
		$criteria->select='*';  // seleccionar solo la columna 'title'
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		//$criteria->order = 'numeracio ASC';
		
		
		$dataProvider = new CActiveDataProvider('AlbumCromoPagina',array(
			'criteria'=>$criteria
		));
		
		
		 $llista = Array();

        foreach($dataProvider->data as $data){ 
            $llista[$data->id]=$data->cromo_id; 
            //$llista[]=array("0"=>$data->numeracio,"1"=>$data->descripcio); 
        }
		return($llista);
       //print_r($llista);die();

          //  die();
	}
}
