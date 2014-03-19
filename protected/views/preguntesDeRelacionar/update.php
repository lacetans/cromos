<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */

$this->breadcrumbs=array(
	'Preguntes De Relacionars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesDeRelacionar', 'url'=>array('index')),
	array('label'=>'Create PreguntesDeRelacionar', 'url'=>array('create')),
	array('label'=>'View PreguntesDeRelacionar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesDeRelacionar', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesDeRelacionar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>