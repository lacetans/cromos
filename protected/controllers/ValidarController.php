<?php
/*
 * STATUS CROMOS
 * 0: pendent
 * 1: aprovat
 *-1: denegat
*/
class ValidarController extends Controller
{
	public function actionIndex()
	{
		//$this->render('index',array('prova'=>$prova));
	}
	
	public function filters()
    {
        return array( 'accessControl' ); // perform access control for CRUD operations
    }
 
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to access all actions
                'actions'=>array('index', 'aprovacromo'),
                'users'=>array('*'),
            ),
        );
    }

	public function actionGallery()
	{
		
		/* CHULETA CRITERIA
		 *	condition	The WHERE clause
			limit	The LIMIT value
			offset	The offset value in a LIMIT clause
			order	The ORDER BY clause
			params	The variables to be bound to the parameters
			select	The columns to be selected
		*/
	
		$conta_cromos = 0; //numero de cromos aprovats o denegats
		$codi_comprovacio = 0; //per defecte 0 o sigui res.
		
		/* CODIS DE COMPROVACIÓ (no confondre amb status cromos)
		 * -1. denegar cromo/s 
		 *  0. res
		 *  1. Aprovar cromo/s 
		 *  2. Album o cromo inexistent o ja aprovat: 2
		 *  3. Album o cromo no vàlid: 3
		 *  4. S'ha apretat algun botó però no s'ha sel·leccionat cap cromo
		*/
		$select_cromos=0; //cromos selecionats per aprovar o denegar
		
		if (isset($_POST['select_cromos'])) { //Si rebem dades del form
			$select_cromos = $_POST['select_cromos'];
			$id_album = $_POST['id_album'];
			//print_r ($_POST); die();
			//APROVAR CROMOS
			if (isset($_POST['aprovar'])){
				//print_r ($_POST); die();
				foreach($select_cromos as $id_cromo){ //per a cada cromo seleccionat
					if (is_numeric($id_album) and is_numeric($id_cromo)){ //Son valors numerics?
						$cromo=Cromos::model()->findByPk($id_cromo); //busquem per id el cromo
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($cromo != Null and $cromo->aprovat!=1 and $album != Null){ //tenim id cromo id àlbum i no està aprovat
							$cromo->aprovat=1; //nou valor al camp
							$cromo->save(); //Guarda els canvis a la BD
							$conta_cromos++; //sumem un cromo més aprovat
							$codi_comprovacio = 1; //s'han aprovat cromos
						}else{
							$codi_comprovacio = 2; //album i/o cromo inexistent o ja aprovat
						}
					}else{
						$codi_comprovacio = 3; //Això no es un cromo i/o album
					}
				}
			}
			
			//DENEGAR CROMOS
			if (isset($_POST['denegar'])){
				foreach($select_cromos as $id_cromo){ //per a cada cromo seleccionat
					if (is_numeric($id_album) and is_numeric($id_cromo)){ //Son valors numerics?
						$cromo=Cromos::model()->findByPk($id_cromo); //busquem per id el cromo
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($cromo != Null and $cromo->aprovat!=-1 and $album != Null){ //tenim id cromo id àlbum i no està denegat
							$cromo->aprovat=-1; //nou valor al camp
							$cromo->save(); //Guarda els canvis a la BD
							$conta_cromos++; //sumem un cromo més aprovat
							$codi_comprovacio = -1; //s'han denegat cromos
						}else{
							$codi_comprovacio = 2; //album i/o cromo inexistent o ja aprovat
						}
					}else{
						$codi_comprovacio = 3; //Això no es un cromo i/o album
					}
				}
			}
		}else if(isset($_POST['aprovar']) or isset($_POST['denegar'])){ //s'ha apretat algun botó sense sel·leccionar cap cromo
			$codi_comprovacio = 4; 
		}
		
		//SEMPRE TORNEM A CARREGAR LA PAGINA DE CROMOS
		$criteria=new CDbCriteria(); //where de sql... que siguin del album
		$criteria->order="id asc"; //ordenació ascendent
		$criteria->condition="aprovat=0"; //nomes mostra els que estan pendents aprovat=0
		$count=Cromos::model()->count($criteria); //article ha de ser cromos (model que toqui)
		$pages=new CPagination($count);
		
		//RESULTATS PER PAGINA
		$pages->pageSize=14;
		$pages->applyLimit($criteria);
		$models=Cromos::model()->findAll($criteria);
		
		$this->render('gallery', array(
			'models' => $models,
			'pages' => $pages,
			'conta_cromos' => $conta_cromos,
			'codi_comprovacio' => $codi_comprovacio,
			'cromos_seleccionats' => $select_cromos
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
