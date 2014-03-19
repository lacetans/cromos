<?php
/*
 * STATUS imatges
 * 0: pendent
 * 1: aprovat
 *-1: denegat
*/

class ImatgesController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
public function filters()
    {
        return array( 'accessControl' ); // perform access control for CRUD operations
    }
 
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to access all actions
                'actions'=>array('index', 'validarimatges'),
                'users'=>array('*'),
            ),
        );
    }

	public function actionValidarimatges()
	{
		
		/* CHULETA CRITERIA
		 *	condition	The WHERE clause
			limit	The LIMIT value
			offset	The offset value in a LIMIT clause
			order	The ORDER BY clause
			params	The variables to be bound to the parameters
			select	The columns to be selected
		*/
	
		$conta_imatges = 0; //numero de imatges aprovats o denegats
		$codi_comprovacio = 0; //per defecte 0 o sigui res.
		
		/* CODIS DE COMPROVACIÓ (no confondre amb status imatges)
		 * -1. denegar imatge/s 
		 *  0. res
		 *  1. Aprovar imatge/s 
		 *  2. Album o imatge inexistent o ja aprovat: 2
		 *  3. Album o imatge no vàlid: 3
		 *  4. S'ha apretat algun botó però no s'ha sel·leccionat cap imatge
		*/
		$select_imatges=0; //imatges selecionades per aprovar o denegar
		
		if (isset($_POST['select_imatges'])) { //Si rebem dades del form
			$select_imatges = $_POST['select_imatges'];
			$id_album = $_POST['id_album'];
			//print_r ($_POST); die();
			//APROVAR CROMOS
			if (isset($_POST['aprovar'])){
				//print_r ($_POST); die();
				foreach($select_imatges as $id_imatge){ //per a cada imatge seleccionat
					if (is_numeric($id_album) and is_numeric($id_imatge)){ //Son valors numerics?
						$imatge=Imatges::model()->findByPk($id_imatge); //busquem per id la imatge
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($imatge != Null and $imatge->aprovada!=1 and $album != Null){ //tenim id imatge id àlbum i no està aprovat
							$imatge->aprovada=1; //nou valor al camp
							$imatge->save(); //Guarda els canvis a la BD
							$conta_imatges++; //sumem una imatge més aprovat
							$codi_comprovacio = 1; //s'han aprovat imatges
						}else{
							$codi_comprovacio = 2; //album i/o imatges inexistent o ja aprovat
						}
					}else{
						$codi_comprovacio = 3; //Això no es un imatge i/o album
					}
				}
			}
			
			//DENEGAR CROMOS
			if (isset($_POST['denegar'])){
				foreach($select_imatges as $id_imatge){ //per a cada imatge seleccionat
					if (is_numeric($id_album) and is_numeric($id_imatge)){ //Son valors numerics?
						$imatge=Imatges::model()->findByPk($id_imatge); //busquem per id el iatge
						$album=Albums::model()->findByPk($id_album); //busquem per id l'album
						if ($imatge != Null and $imatge->aprovada!=-1 and $album != Null){ //tenim id imatge id àlbum i no està denegat
							$imatge->aprovada=-1; //nou valor al camp
							$imatge->save(); //Guarda els canvis a la BD
							$conta_imatges++; //sumem una imatge més aprovat
							$codi_comprovacio = -1; //s'han denegat imatges
						}else{
							$codi_comprovacio = 2; //album i/o imatges inexistent o ja aprovat
						}
					}else{
						$codi_comprovacio = 3; //Això no es un imatges i/o album
					}
				}
			}
		}else if(isset($_POST['aprovar']) or isset($_POST['denegar'])){ //s'ha apretat algun botó sense sel·leccionar cap imatge
			$codi_comprovacio = 4; 
		}
		
		//SEMPRE TORNEM A CARREGAR LA PAGINA DE IMATGES
		$criteria=new CDbCriteria(); //where de sql... que siguin del album
		$criteria->order="id asc"; //ordenació ascendent
		$criteria->condition="aprovada=0"; //nomes mostra els que estan pendents aprovat=0
		$count=Imatges::model()->count($criteria); //article ha de ser imatges (model que toqui)
		$pages=new CPagination($count);
		
		//RESULTATS PER PAGINA
		$pages->pageSize=3;
		$pages->applyLimit($criteria);
		$models=Imatges::model()->findAll($criteria);
		
		$this->render('validarimatges', array(
			'models' => $models,
			'pages' => $pages,
			'conta_imatges' => $conta_imatges,
			'codi_comprovacio' => $codi_comprovacio,
			'imatges_seleccionats' => $select_imatges
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
