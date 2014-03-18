<?php
/* @var $this CromosController */
/* @var $model Cromos */

$this->breadcrumbs=array(
	'Cromoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cromos', 'url'=>array('index')),
	array('label'=>'Create Cromos', 'url'=>array('create')),
	array('label'=>'View Cromos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cromos', 'url'=>array('admin')),
);
?>

<h1>Update Cromos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>