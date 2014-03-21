<?php
/* @var $this ImatgesController */
/* @var $model Imatges */

$this->breadcrumbs=array(
	'Imatges'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Imatges', 'url'=>array('index')),
	array('label'=>'Create Imatges', 'url'=>array('create')),
	array('label'=>'Update Imatges', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Imatges', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imatges', 'url'=>array('admin')),
);
?>

<h1>View Imatges #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcio',
	),
)); ?>
