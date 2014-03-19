<?php
/* @var $this TemesController */
/* @var $model Temes */

$this->breadcrumbs=array(
	'Temes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Temes', 'url'=>array('index')),
	array('label'=>'Create Temes', 'url'=>array('create')),
	array('label'=>'Update Temes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Temes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Temes', 'url'=>array('admin')),
);
?>

<h1>View Temes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcio',
	),
)); ?>
