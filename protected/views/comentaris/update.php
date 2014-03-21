<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentarises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentaris', 'url'=>array('index')),
	array('label'=>'Create Comentaris', 'url'=>array('create')),
	array('label'=>'View Comentaris', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comentaris', 'url'=>array('admin')),
);
?>

<h1>Update Comentaris <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>