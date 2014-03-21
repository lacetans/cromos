<?php
/* @var $this PreguntesSiNoController */
/* @var $model PreguntesSiNo */

$this->breadcrumbs=array(
	'Preguntes Si Nos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesSiNo', 'url'=>array('index')),
	array('label'=>'Create PreguntesSiNo', 'url'=>array('create')),
	array('label'=>'View PreguntesSiNo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesSiNo', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesSiNo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>