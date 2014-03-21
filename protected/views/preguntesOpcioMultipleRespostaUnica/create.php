<?php
/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $model PreguntesOpcioMultipleRespostaUnica */

$this->breadcrumbs=array(
	'Preguntes Opcio Multiple Resposta Unicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesOpcioMultipleRespostaUnica', 'url'=>array('index')),
	array('label'=>'Manage PreguntesOpcioMultipleRespostaUnica', 'url'=>array('admin')),
);
?>

<h1>Create PreguntesOpcioMultipleRespostaUnica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>