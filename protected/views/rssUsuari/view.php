<?php
/* @var $this RssUsuariController */
/* @var $model RssUsuari */

$this->breadcrumbs=array(
	'Rss Usuaris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RssUsuari', 'url'=>array('index')),
	array('label'=>'Create RssUsuari', 'url'=>array('create')),
	array('label'=>'Update RssUsuari', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RssUsuari', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RssUsuari', 'url'=>array('admin')),
);
?>

<h1>View RssUsuari #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rss_id',
		'usuari_id',
	),
)); ?>
