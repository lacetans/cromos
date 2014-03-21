<?php
/* @var $this RssController */
/* @var $model Rss */

$this->breadcrumbs=array(
	'Rsses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rss', 'url'=>array('index')),
	array('label'=>'Create Rss', 'url'=>array('create')),
	array('label'=>'Update Rss', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rss', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rss', 'url'=>array('admin')),
);
?>

<h1>View Rss #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcio',
	),
)); ?>
