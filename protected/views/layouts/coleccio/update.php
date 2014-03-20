<?php
/* @var $this ColeccioController */
/* @var $model Coleccio */

$this->breadcrumbs=array(
	'Coleccios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coleccio', 'url'=>array('index')),
	array('label'=>'Create Coleccio', 'url'=>array('create')),
	array('label'=>'View Coleccio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Coleccio', 'url'=>array('admin')),
);
?>

<h1>Update Coleccio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>