<?php
/* @var $this PreguntesController */
/* @var $model preguntes */

$this->breadcrumbs=array(
	'Preguntes'=>array('index'),
	$model->preguntes,
);

$this->menu=array(
	array('label'=>'List preguntes', 'url'=>array('index')),
	array('label'=>'Create preguntes', 'url'=>array('create')),
	array('label'=>'Update preguntes', 'url'=>array('update', 'id'=>$model->preguntes)),
	array('label'=>'Delete preguntes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->preguntes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage preguntes', 'url'=>array('admin')),
);
?>

<h1>View preguntes #<?php echo $model->preguntes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'preguntes',
		'tipus',
	),
)); ?>
