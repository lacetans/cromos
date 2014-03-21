<?php
/* @var $this AlbumUsuariController */
/* @var $model AlbumUsuari */

$this->breadcrumbs=array(
	'Album Usuaris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlbumUsuari', 'url'=>array('index')),
	array('label'=>'Create AlbumUsuari', 'url'=>array('create')),
	array('label'=>'Update AlbumUsuari', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlbumUsuari', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlbumUsuari', 'url'=>array('admin')),
);
?>

<h1>View AlbumUsuari #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuari_id',
		'album_id',
		'data_creacio',
	),
)); ?>
