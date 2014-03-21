<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentaris'=>array('index'),
	'Create',
);


?>

<h1>Crear Comentaris</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'tipus'=>$tipus, 'pare'=>$pare, 'id_extern'=>$id_extern)); ?>
