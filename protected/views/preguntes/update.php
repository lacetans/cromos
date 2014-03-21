<?php
/* @var $this PreguntesController */
/* @var $model preguntes */

$this->breadcrumbs=array(
	'Preguntes'=>array('index'),
	$model->preguntes=>array('view','id'=>$model->preguntes),
	'Update',
);

$this->menu=array(
	array('label'=>'List preguntes', 'url'=>array('index')),
	array('label'=>'Create preguntes', 'url'=>array('create')),
	array('label'=>'View preguntes', 'url'=>array('view', 'id'=>$model->preguntes)),
	array('label'=>'Manage preguntes', 'url'=>array('admin')),
);
?>

<h1>Update preguntes <?php echo $model->preguntes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>