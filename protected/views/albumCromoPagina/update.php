<?php
/* @var $this AlbumCromoPaginaController */
/* @var $model AlbumCromoPagina */

$this->breadcrumbs=array(
	'Album Cromo Paginas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlbumCromoPagina', 'url'=>array('index')),
	array('label'=>'Create AlbumCromoPagina', 'url'=>array('create')),
	array('label'=>'View AlbumCromoPagina', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlbumCromoPagina', 'url'=>array('admin')),
);
?>

<h1>Update AlbumCromoPagina <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>