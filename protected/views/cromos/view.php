<?php
/* @var $this CromosController */
/* @var $model Cromos */

$this->breadcrumbs=array(
	'Cromoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cromos', 'url'=>array('index')),
	array('label'=>'Create Cromos', 'url'=>array('create')),
	array('label'=>'Update Cromos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cromos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cromos', 'url'=>array('admin')),
);
?>

<h1>View Cromos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcio',
		'aprovat',
		'numeracio',
	),
)); ?>
