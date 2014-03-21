<?php
/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $model PreguntesOpcioMultipleRespostaUnica */

$this->breadcrumbs=array(
	'Preguntes Opcio Multiple Resposta Unicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesOpcioMultipleRespostaUnica', 'url'=>array('index')),
	array('label'=>'Create PreguntesOpcioMultipleRespostaUnica', 'url'=>array('create')),
	array('label'=>'View PreguntesOpcioMultipleRespostaUnica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesOpcioMultipleRespostaUnica', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesOpcioMultipleRespostaUnica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>