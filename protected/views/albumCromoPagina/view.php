<?php
/* @var $this AlbumCromoPaginaController */
/* @var $model AlbumCromoPagina */

$this->breadcrumbs=array(
	'Album Cromo Paginas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlbumCromoPagina', 'url'=>array('index')),
	array('label'=>'Create AlbumCromoPagina', 'url'=>array('create')),
	array('label'=>'Update AlbumCromoPagina', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlbumCromoPagina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlbumCromoPagina', 'url'=>array('admin')),
);
?>

<h1>View AlbumCromoPagina #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'album_id',
		'cromo_id',
		'pagina_id',
	),
)); ?>
