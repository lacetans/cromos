<?php
/*
 * STATUS preguntes
 * 0: pendent
 * 1: aprovat
 *-1: denegat
*/
class PreguntesController extends Controller
{
	public function actionIndex()
	{
		//$this->render('index');
	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function loadModel($id)
	{
		$model=Preguntes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function actionValidarpreguntes()
	{
		/* CHULETA CRITERIA
		 *	condition	The WHERE clause
			limit	The LIMIT value
			offset	The offset value in a LIMIT clause
			order	The ORDER BY clause
			params	The variables to be bound to the parameters
			select	The columns to be selected
		*/
	
		$conta_preguntes = 0; //numero de preguntes aprovades o denegades
		$codi_comprovacio = 0; //per defecte 0 o sigui res.
		
		/* CODIS DE COMPROVACIÓ (no confondre amb status preguntes)
		 * -1. denegar pregunta/s 
		 *  0. res
		 *  1. Aprovar preguntes/s 
		 *  2. Album o pregunta inexistent o ja aprovat: 2
		 *  3. Album o pregunta no vàlid: 3
		 *  4. S'ha apretat algun botó però no s'ha sel·leccionat cap pregunta
		*/
		$select_preguntes=0; //preguntes selecionades per aprovar o denegar
		
		if (isset($_POST['preguntes'])) { //Si rebem dades del form
			$select_preguntes = $_POST['preguntes'];
			$id_album = $_POST['id_album'];

			//APROVAR PREGUNTES
			if (isset($_POST['aprovar'])){
				foreach($select_preguntes as $id_preguntes){ //per a cada pregunta seleccionada
					if (is_numeric($id_album) and is_numeric($id_preguntes)){ //Son valors numerics?
						$preguntes=Preguntes::model()->findByPk($id_preguntes); //busquem per id l
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($preguntes != Null and $preguntes->aprovada!=1 and $album != Null){ //tenim id pregunta id àlbum i no està aprovada
							$preguntes->aprovada=1; //nou valor al camp
							$preguntes->save(); //Guarda els canvis a la BD
							$conta_preguntes++; //sumem una pregunta més aprovat
							$codi_comprovacio = 1; //s'han aprovat preguntes
						}else{
							$codi_comprovacio = 2; //album i/o pregunta inexistent o ja aprovada
						}
					}else{
						$codi_comprovacio = 3; //Això no es una pregunta i/o album
					}
				}
			}
			
			//DENEGAR CROMOS
			if (isset($_POST['denegar'])){
				foreach($select_preguntes as $id_preguntes){ //per a cada pregunta seleccionada
					if (is_numeric($id_album) and is_numeric($id_preguntes)){ //Son valors numerics?
						$preguntes=Preguntes::model()->findByPk($id_preguntes); //busquem per id l
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($preguntes != Null and $preguntes->aprovada!=1 and $album != Null){ //tenim id pregunta id àlbum i no està aprovada
							$preguntes->aprovada=-1; //nou valor al camp
							$preguntes->save(); //Guarda els canvis a la BD
							$conta_preguntes++; //sumem una pregunta més denegada
							$codi_comprovacio = -1; //s'han denegat preguntes
						}else{
							$codi_comprovacio = 2; //album i/o pregunta inexistent o ja aprovada
						}
					}else{
						$codi_comprovacio = 3; //Això no es una pregunta i/o album
					}
				}
			}
		}else if(isset($_POST['aprovar']) or isset($_POST['denegar'])){ //s'ha apretat algun botó sense sel·leccionar cap pregunta
			$codi_comprovacio = 4; 
		}
		
		//SEMPRE TORNEM A CARREGAR LA PAGINA DE preguntes
		$criteria=new CDbCriteria(); //where de sql... que siguin del album
		$criteria->order="preguntes asc"; //ordenació ascendent
		$criteria->condition="aprovada=0"; //nomes mostra els que estan pendents aprovat=0
		$count=Preguntes::model()->count($criteria);
		$pages=new CPagination($count);
		
		//RESULTATS PER PAGINA
		$pages->pageSize=8;
		$pages->applyLimit($criteria);
		$models=Preguntes::model()->findAll($criteria);

		//$codi_comprovacio = 0;
		
		$this->render('validarpreguntes', array(
			'models' => $models,
			'pages' => $pages,
			'conta_preguntes' => $conta_preguntes,
			'codi_comprovacio' => $codi_comprovacio,
		));
		
		
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
