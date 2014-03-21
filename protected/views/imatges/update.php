<?php
/* @var $this ImatgesController */
/* @var $model Imatges */

$this->breadcrumbs=array(
	'Imatges'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imatges', 'url'=>array('index')),
	array('label'=>'Create Imatges', 'url'=>array('create')),
	array('label'=>'View Imatges', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Imatges', 'url'=>array('admin')),
);
?>

<h1>Update Imatges <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>