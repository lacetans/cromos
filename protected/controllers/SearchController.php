<?php
class SearchController extends Controller
{
    /**
     * @var string index dir as alias path from <b>application.</b>  , default to <b>runtime.search</b>
     */
    private $_indexFiles = 'runtime.search';
    /**
     * (non-PHPdoc)
     * @see CController::init()
     */
    public function init(){
        Yii::import('application.vendors.*');
        require_once('Zend/Search/Lucene.php');
        parent::init(); 
    }
 
    public function actionCreate()
    {
	$retorn = $_POST['busqueda'];
        $dades = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles), true);
        /* Afegir models a la busqueda */
        $cromoss = Cromos::model()->findAll();
        $albumss = Albums::model()->findAll();
        /* Recorrer models */
        foreach($cromoss as $cromo){
            $doc = new Zend_Search_Lucene_Document();
            
            $doc->addField(Zend_Search_Lucene_Field::Text('descripcio', CHtml::encode($cromo->descripcio), 'utf-8')
            );
 
            /*$doc->addField(Zend_Search_Lucene_Field::Keyword('aprovat', CHtml::encode($cromo->aprovat), 'utf-8')
            );*/   
 
            $doc->addField(Zend_Search_Lucene_Field::Keyword('numeracio', CHtml::encode($cromo->numeracio), 'utf-8')
            );

	    $doc->addField(Zend_Search_Lucene_Field::Text('link', CHtml::encode($cromo->url), 'utf-8')
            );
            $dades->addDocument($doc);
        }

        foreach($albumss as $album){
            $doc2 = new Zend_Search_Lucene_Document();
            
            /*$doc2->addField(Zend_Search_Lucene_Field::Text('nom', CHtml::encode($album->nom), 'utf-8')
            );*/
 
            $doc2->addField(Zend_Search_Lucene_Field::Text('descripcio', CHtml::encode($album->descripcio), 'utf-8')
            );   
 
            /*$doc2->addField(Zend_Search_Lucene_Field::Text('portada', CHtml::encode($album->portada), 'utf-8')
            );

            $doc2->addField(Zend_Search_Lucene_Field::Keyword('aprovat', CHtml::encode($album->aprovat), 'utf-8')
            );*/   
	    
	    $doc2->addField(Zend_Search_Lucene_Field::Text('link', CHtml::encode($album->url), 'utf-8')
            );
 
            $dades->addDocument($doc2);
        }
        $dades->commit();
	header( 'Location: http://localhost/cromos/index.php?r=search/search&q='.$retorn );
	//echo 'Lucene index created'.$retornar;
    }
 
    public function actionSearch()
    {
        $this->layout='column2';
        if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null) {
            $dades = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
            $results = $dades->find($term);
            $query = Zend_Search_Lucene_Search_QueryParser::parse($term);       
            $this->render('search', compact('results','term', 'query'));
        }
    }
}
