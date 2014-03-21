<?php

       class dades_cromo {
                var $id;
                var $numeracio_cromo;
                var $descripcio="";
                var $repetits=0;
        }

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
				'actions'=>array('create','update','llistat','repetits','falten','cromosUsuari'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','llistat','repetits','falten','cromosUsuari'),
				'users'=>array('admin','demo'),
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
	
	//aqui creem el llistat dels cromos que falten, els que tens repetits i descripcio/nom del cromo en format de llista
	public function actionLlistat()
	{   
	    
		//mostrar nomes cromos del album amb album_id = 1
		$album_id=1;//id del album
		$criteria=new CDbCriteria;
		$criteria->select='*';  
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		
		
		$dataProvider = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria,
		));
		
		
		 $llista_cromos = Array();

        foreach($dataProvider->data as $data){ 
            
            $llista_cromos[]=$data->id; 
        }
        
        $llista_cromos_ordenada=natsort($llista_cromos);
        //print_r($llista_cromos_ordenada);die();
		//mostrar el num de cromos que te l'usuari.
		$cromos_totals=$dataProvider->totalItemCount;
		//print($cromos_totals);die();

		//mostrar el num de cromos repetits.
		$criteria2=new CDbCriteria;
		$criteria2->select='*';// seleccionar solo la columna 'title'
		$criteria2->condition='vegades>1';

		$dataProvider2 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria2,
		));
		
		 $llista_repes = Array();

        foreach($dataProvider2->data as $data){ 
            
            $llista_repes[$data->id]=$data->vegades; 
        }
		//print_r($llista_repes);die();
		$cromos_repes=$dataProvider2->totalItemCount;
		//print_r($cromos_repes);die();
		
		//num total de cromos que te el album
		
		//Com cridar des de qualsevol controlador al mètode de AlbumCromoPagina: public  function CromosTotals()
		//returns array containing controller instance and action index.
		$albumcromopagina_controller=Yii::app()->createController('AlbumCromoPagina');
		$albumcromopagina_controller=$albumcromopagina_controller[0]; //get the controller instance.
		$albumcromopagina_controller->loadModel(1); //use a public method.
		$cromos_totals_album=$albumcromopagina_controller->CromosTotals();//die();
		//print_r($cromos_totals_album);die();
		
		$criteria3=new CDbCriteria;
		$criteria3->select='album_id';  // seleccionar solo la columna 'title'
		$criteria3->condition='album_id=1';

		$dataProvider3 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria3,
		));
		$cromos_album=$dataProvider3->totalItemCount;
		//print_r($cromos_album);die();
		//mostrar num de cromos falten per completar l'album. Restar num total de cromos per els cromos que te l'usuari.
		$cromos_falten = $cromos_totals_album - $cromos_totals;
		//print_r($cromos_falten);die();
		
		
		//echo $dataProvider->totalItemCount;die(); //total de cromos que hi ha en el album
		
		//$dataProvider2=new CActiveDataProvider('Coleccio');
		
		//ordenar cromos per numeracio de lalbum
		
		$cromos_controller=Yii::app()->createController('AlbumCromoPagina');
		$cromos_controller=$cromos_controller[0]; //get the controller instance.
		$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo ara es el num de cromos totals que hi ha en el album
		$numeracio_cromo=$cromos_controller->Numeracio($album_id);//die();
		//print_r($numeracio_cromo);die();
		
		//numeracio cromo ordenada
		$cromos_controller=Yii::app()->createController('Cromos');
		$cromos_controller=$cromos_controller[0]; //get the controller instance.
		$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo ara es el num de cromos totals que hi ha en el album
		$numeracio=$cromos_controller->Numeracioo($numeracio_cromo);//die();
		//print_r($numeracio);die();
		
		$cromos_controller2=Yii::app()->createController('Cromos');
		$cromos_controller2=$cromos_controller2[0]; //get the controller instance.
		$cromos_controller2->loadModel(1); //use a public method.
		$descripcio=$cromos_controller2->Descripcio($llista_cromos);//die();
		//print_r($descripcio);die();		
		
		
		
		 //print_r($numeracio_cromo);die();
		 //print_r($descripcio);die();
        $comptador=0;
        $array_dades= array();
		//foreach($llista_cromos as $key=>$id){ 
		foreach($numeracio_cromo as $key=>$id){ 
            $meu_cromo=new dades_cromo();
            $meu_cromo->id=$key;
            $meu_cromo->numeracio_cromo=$id;
            if (isset($descripcio[$key]))
				$meu_cromo->descripcio=$descripcio[$key];
				else $meu_cromo->descripcio="Sense descripció";
            if (isset ($llista_repes[$key]))
				$meu_cromo->repetits=$llista_repes[$key];
				else $meu_cromo->repetits = 1;
            $array_dades[$comptador]=$meu_cromo;
            $comptador++;
        }
        
        

//$fruits[0]["fruit"] = "lemons";
//print_r($array_dades);die();
//usort($array_dades, "cmp");
        //print_r($array_dades);die();
        //print_r($llista_repes);die();
		//renderitzar les variables a la vista llista
		$this->render('llistat',array(
			'dataProvider'=>$dataProvider,
			'cromos_totals'=>$cromos_totals,
			'cromos_repes'=>$cromos_repes,
			'cromos_falten'=>$cromos_falten,
			//'descripcio'=>$descripcio,//
			//'numeracio_cromo'=>$numeracio_cromo,//
			//'llista_repes'=>$llista_repes,
			'array_dades'=>$array_dades
			
		));	
		
	}  
	
	public function actionRepetits()
	{   
	    //mostrar nomes cromos del album amb album_id = 1
		$album_id=1;//id del album
		$criteria=new CDbCriteria;
		$criteria->select='*';  
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		
		
		$dataProvider = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria,
			
		));
		
		
		 $llista_cromos = Array();

        foreach($dataProvider->data as $data){ 
            
            $llista_cromos[]=$data->id; 
        }
        
        $llista_cromos_ordenada=natsort($llista_cromos);
        //print_r($llista_cromos_ordenada);die();
		//mostrar el num de cromos que te l'usuari.
		$cromos_totals=$dataProvider->totalItemCount;
		//print($cromos_totals);die();

		//mostrar el num de cromos repetits.
		$criteria2=new CDbCriteria;
		$criteria2->select='*';// seleccionar solo la columna 'title'
		$criteria2->condition='vegades>1';

		$dataProvider2 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria2,
		));
		
		 $llista_repes = Array();

        foreach($dataProvider2->data as $data){ 
            
            $llista_repes[$data->id]=$data->vegades; 
        }
		//print_r($llista_repes);die();
		$cromos_repes=$dataProvider2->totalItemCount;
		//print_r($cromos_repes);die();
		
		//num total de cromos que te el album
		
		//Com cridar des de qualsevol controlador al mètode de AlbumCromoPagina: public  function CromosTotals()
		//returns array containing controller instance and action index.
		$albumcromopagina_controller=Yii::app()->createController('AlbumCromoPagina');
		$albumcromopagina_controller=$albumcromopagina_controller[0]; //get the controller instance.
		$albumcromopagina_controller->loadModel(1); //use a public method.
		$cromos_totals_album=$albumcromopagina_controller->CromosTotals();//die();
		//print_r($cromos_totals_album);die();
		
		$criteria3=new CDbCriteria;
		$criteria3->select='album_id';  // seleccionar solo la columna 'title'
		$criteria3->condition='album_id=1';

		$dataProvider3 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria3,
		));
		$cromos_album=$dataProvider3->totalItemCount;
		//print_r($cromos_album);die();
		//mostrar num de cromos falten per completar l'album. Restar num total de cromos per els cromos que te l'usuari.
		$cromos_falten = $cromos_totals_album - $cromos_totals;
		//print_r($cromos_falten);die();
		
		
		//echo $dataProvider->totalItemCount;die(); //total de cromos que hi ha en el album
		
		//$dataProvider2=new CActiveDataProvider('Coleccio');
		
		//ordenar cromos per numeracio de lalbum
		
		$cromos_controller=Yii::app()->createController('AlbumCromoPagina');
		$cromos_controller=$cromos_controller[0]; //get the controller instance.
		$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo ara es el num de cromos totals que hi ha en el album
		$numeracio_cromo=$cromos_controller->Numeracio($album_id);//die();
		//print_r($numeracio_cromo);die();
		
		
		//ordenar cromos per numeracio de lalbum
		
		//$cromos_controller=Yii::app()->createController('Cromos');
		//$cromos_controller=$cromos_controller[0]; //get the controller instance.
		//$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo=$cromos_controller->Numeracio();//die();
		//print_r($numeracio_cromo);die();
		
		
		$cromos_controller2=Yii::app()->createController('Cromos');
		$cromos_controller2=$cromos_controller2[0]; //get the controller instance.
		$cromos_controller2->loadModel(1); //use a public method.
		$descripcio=$cromos_controller2->Descripcio($llista_cromos);//die();
		//print_r($descripcio);die();		
		
		
		
		 //print_r($numeracio_cromo);die();
		 //print_r($descripcio);die();
        $comptador=0;
        $array_dades= array();
		//foreach($llista_cromos as $key=>$id){ 
		foreach($numeracio_cromo as $key=>$id){ 
            $meu_cromo=new dades_cromo();
            $meu_cromo->id=$key;
            $meu_cromo->numeracio_cromo=$id;
            if (isset($descripcio[$key]))
				$meu_cromo->descripcio=$descripcio[$key];
				else $meu_cromo->descripcio="Sense Descripció";
            if (isset ($llista_repes[$key])){
				$meu_cromo->repetits=$llista_repes[$key];
				$array_dades[$comptador]=$meu_cromo;
				$comptador++;}
				else $meu_cromo->repetits = 1;
            
        }
        
        

//$fruits[0]["fruit"] = "lemons";
//print_r($array_dades[0]['numeracio_cromo']);die();
//usort($array_dades, "cmp");
        //print_r($array_dades);die();
        //print_r($llista_repes);die();
		//renderitzar les variables a la vista llista
		$this->render('repetits',array(
			'dataProvider'=>$dataProvider,
			'cromos_totals'=>$cromos_totals,
			'cromos_repes'=>$cromos_repes,
			'cromos_falten'=>$cromos_falten,
			//'descripcio'=>$descripcio,//
			'numeracio_cromo'=>$numeracio_cromo,//
			'llista_repes'=>$llista_repes,
			'array_dades'=>$array_dades
			
		));	
		
	}  
	
	public function actionFalten()
	{   
	    //mostrar nomes cromos del album amb album_id = 1
		$album_id=1;//id del album
		$criteria=new CDbCriteria;
		$criteria->select='*';  
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		
		
		$dataProvider = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria,
		));
		
		
		 $llista_cromos = Array();

        foreach($dataProvider->data as $data){ 
            
            $llista_cromos[]=$data->id; 
        }
        
        $llista_cromos_ordenada=natsort($llista_cromos);
        //print_r($llista_cromos_ordenada);die();
		//mostrar el num de cromos que te l'usuari.
		$cromos_totals=$dataProvider->totalItemCount;
		//print($cromos_totals);die();

		//mostrar el num de cromos repetits.
		$criteria2=new CDbCriteria;
		$criteria2->select='*';// seleccionar solo la columna 'title'
		$criteria2->condition='vegades>1';

		$dataProvider2 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria2,
		));
		
		 $llista_repes = Array();

        foreach($dataProvider2->data as $data){ 
            
            $llista_repes[$data->id]=$data->vegades; 
        }
		//print_r($llista_repes);die();
		$cromos_repes=$dataProvider2->totalItemCount;
		//print_r($cromos_repes);die();
		
		//num total de cromos que te el album
		
		//Com cridar des de qualsevol controlador al mètode de AlbumCromoPagina: public  function CromosTotals()
		//returns array containing controller instance and action index.
		$albumcromopagina_controller=Yii::app()->createController('AlbumCromoPagina');
		$albumcromopagina_controller=$albumcromopagina_controller[0]; //get the controller instance.
		$albumcromopagina_controller->loadModel(1); //use a public method.
		$cromos_totals_album=$albumcromopagina_controller->CromosTotals();//die();
		//print_r($cromos_totals_album);die();
		
		$criteria3=new CDbCriteria;
		$criteria3->select='album_id';  // seleccionar solo la columna 'title'
		$criteria3->condition='album_id=1';

		$dataProvider3 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria3,
		));
		$cromos_album=$dataProvider3->totalItemCount;
		//print_r($cromos_album);die();
		
		//mostrar num de cromos falten per completar l'album. Restar num total de cromos per els cromos que te l'usuari.
		$cromos_falten = $cromos_totals_album - $cromos_totals;
		//print_r($cromos_falten);die();
		
		
		
		//echo $dataProvider->totalItemCount;die(); //total de cromos que hi ha en el album
		
		//$dataProvider2=new CActiveDataProvider('Coleccio');
		
		//ordenar cromos per numeracio de lalbum
		
		$cromos_controller=Yii::app()->createController('AlbumCromoPagina');
		$cromos_controller=$cromos_controller[0]; //get the controller instance.
		$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo ara es el num de cromos totals que hi ha en el album
		$numeracio_cromo=$cromos_controller->Numeracio($album_id);//die();
		//print_r($numeracio_cromo);die();
		
		
		//ordenar cromos per numeracio de lalbum
		
		//$cromos_controller=Yii::app()->createController('Cromos');
		//$cromos_controller=$cromos_controller[0]; //get the controller instance.
		//$cromos_controller->loadModel(1); //use a public method.
		//$numeracio_cromo=$cromos_controller->Numeracio();//die();
		//print_r($numeracio_cromo);die();
		
		
		$cromos_controller2=Yii::app()->createController('Cromos');
		$cromos_controller2=$cromos_controller2[0]; //get the controller instance.
		$cromos_controller2->loadModel(1); //use a public method.
		$descripcio=$cromos_controller2->Descripcio($llista_cromos);//die();
		//print_r($descripcio);die();		
		
		
		
		 //print_r($numeracio_cromo);die();
		 //print_r($descripcio);die();
        $comptador=0;
        $array_dades= array();
		//foreach($llista_cromos as $key=>$id){ 
		foreach($numeracio_cromo as $key=>$id){ 
            $meu_cromo=new dades_cromo();
            $meu_cromo->id=$key;
			$meu_cromo->numeracio_cromo=$id;
            if (isset($descripcio[$key]))
				$meu_cromo->descripcio=$descripcio[$key];
				else $meu_cromo->descripcio="Sense Descripció";
            if (isset ($llista_repes[$key]))
				$meu_cromo->repetits=$llista_repes[$key];
				else $meu_cromo->repetits = 1;
            $array_dades[$comptador]=$meu_cromo;
            //$comptador++;
        }
        
        


//print_r($array_dades[0]['numeracio_cromo']);die();
//usort($array_dades, "cmp");
        //print_r($array_dades);die();
        //print_r($llista_repes);die();
		//renderitzar les variables a la vista llista
		$this->render('falten',array(
			'dataProvider'=>$dataProvider,
			'cromos_totals'=>$cromos_totals,
			'cromos_repes'=>$cromos_repes,
			'cromos_falten'=>$cromos_falten,
			//'descripcio'=>$descripcio,//
			'numeracio_cromo'=>$numeracio_cromo,//
			'llista_repes'=>$llista_repes,
			'array_dades'=>$array_dades
			
		));	
		
	}  
	
	public function actionCromosUsuari()
	{   
	    
		//mostrar nomes cromos del album amb album_id = 1
		$album_id=1;//id del album
		$criteria=new CDbCriteria;
		$criteria->select='*';  
		$criteria->condition='album_id=:album_id';
		$criteria->params=array(':album_id'=>$album_id);
		
		
		$dataProvider = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria,
			
		));
		
		
		 $llista_cromos = Array();

        foreach($dataProvider->data as $data){ 
            
            $llista_cromos[]=$data->id; 
        }
       
		//mostrar el num de cromos que te l'usuari.
		$cromos_totals=$dataProvider->totalItemCount;
		//print($cromos_totals);die();

		//mostrar el num de cromos repetits.
		$criteria2=new CDbCriteria;
		$criteria2->select='*';// seleccionar solo la columna 'title'
		$criteria2->condition='vegades>1';

		$dataProvider2 = new CActiveDataProvider('Coleccio',array(
			'criteria'=>$criteria2,
		));
		
		 $llista_repes = Array();

        foreach($dataProvider2->data as $data){ 
            
            $llista_repes[$data->id]=$data->vegades; 
        }
		
		$cromos_repes=$dataProvider2->totalItemCount;
		
		
		//num total de cromos que te el album
		$albumcromopagina_controller=Yii::app()->createController('AlbumCromoPagina');
		$albumcromopagina_controller=$albumcromopagina_controller[0]; 
		$albumcromopagina_controller->loadModel(1); 
		$cromos_totals_album=$albumcromopagina_controller->CromosTotals();
		
		
		
		//mostrar num de cromos falten per completar l'album. Restar num total de cromos per els cromos que te l'usuari.
		$cromos_falten = $cromos_totals_album - $cromos_totals;
		
		
	
	//$numeracio_cromo ara es el num de cromos totals que hi ha en el album
		$cromos_controller=Yii::app()->createController('AlbumCromoPagina');
		$cromos_controller=$cromos_controller[0]; 
		$cromos_controller->loadModel(1); 
	
		$numeracio_cromo=$cromos_controller->Numeracio($album_id);
		
		
		$cromos_controller2=Yii::app()->createController('Cromos');
		$cromos_controller2=$cromos_controller2[0]; 
		$cromos_controller2->loadModel(1); 
		$descripcio=$cromos_controller2->Descripcio($llista_cromos);
	
		
	
        $comptador=0;
        $array_dades= array();
		foreach($llista_cromos as $key=>$id){ 
		//foreach($numeracio_cromo as $key=>$id){ 
            $meu_cromo=new dades_cromo();
            $meu_cromo->id=$key;
            $meu_cromo->numeracio_cromo=$id;
            if (isset($descripcio[$key]))
				$meu_cromo->descripcio=$descripcio[$key];
				else $meu_cromo->descripcio="Sense descripció";
            if (isset ($llista_repes[$key]))
				$meu_cromo->repetits=$llista_repes[$key];
				else $meu_cromo->repetits = 1;
            $array_dades[$comptador]=$meu_cromo;
            $comptador++;
        }

		//renderitzar les variables a la vista llista
		$this->render('cromosUsuari',array(
			'dataProvider'=>$dataProvider,
			'cromos_totals'=>$cromos_totals,
			'cromos_repes'=>$cromos_repes,
			'cromos_falten'=>$cromos_falten,
			'array_dades'=>$array_dades
			
		));	
		
	}  
	
}
