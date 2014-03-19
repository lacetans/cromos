<?php

class CromosController extends Controller
{
	public function actionIndex(){
		$this->render('index');
	}
	
	//Aprova els cromos
	public function actionApprove($id_album, $id_cromo)
	{
		if (is_numeric($id_album) and is_numeric($id_cromo)){ //Son valors numerics?
			$cromo=Cromos::model()->findByPk($id_cromo); //busquem per id el cromo
			//$album=Albums::model()->findByPk($id_album); //busquem per id l'album
			
			if ($cromo != Null and $cromo->aprovat!=1 /*and $album != Null*/){
				$cromo->aprovat=1; //nou valor al camp
				$cromo->save(); //Guarda els canvis a la BD
				
				echo "S'ha aprovat el cromo";
				
			}else{
				echo "No existeix album i/o cromo, o aquest album/cromo ja està aprovat";
			}
		}else{
			echo "Això no es un cromo i/o album";
		}
	}
	
	//Denega el cromo
	public function actionDeny($id_album, $id_cromo)
	{
		//echo $id_album;
		//echo $id_cromo;
		$cromo=Cromos::model()->findByPk($id_cromo); //busquem per id el cromo
		$cromo->aprovat='0'; //nom del camp=nou valor del camp
		$cromo->save(); //Guarda els canvis a la BD
	}
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
