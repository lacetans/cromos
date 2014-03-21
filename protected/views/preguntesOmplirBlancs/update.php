<?php
/* @var $this PreguntesOmplirBlancsController */
/* @var $model PreguntesOmplirBlancs */

$this->breadcrumbs=array(
	'Preguntes Omplir Blancs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesOmplirBlancs', 'url'=>array('index')),
	array('label'=>'Create PreguntesOmplirBlancs', 'url'=>array('create')),
	array('label'=>'View PreguntesOmplirBlancs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesOmplirBlancs', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesOmplirBlancs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>