<?php
/* @var $this TemesController */
/* @var $model Temes */

$this->breadcrumbs=array(
	'Temes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Temes', 'url'=>array('index')),
	array('label'=>'Create Temes', 'url'=>array('create')),
	array('label'=>'View Temes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Temes', 'url'=>array('admin')),
);
?>

<h1>Update Temes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>