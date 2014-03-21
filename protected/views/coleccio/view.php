<?php
/* @var $this ColeccioController */
/* @var $model Coleccio */

$this->breadcrumbs=array(
	'Coleccios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Coleccio', 'url'=>array('index')),
	array('label'=>'Create Coleccio', 'url'=>array('create')),
	array('label'=>'Update Coleccio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Coleccio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coleccio', 'url'=>array('admin')),
);
?>

<h1>View Coleccio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'album_id',
		'cromo_id',
		'usuari_id',
		'vegades',
	),
)); ?>
