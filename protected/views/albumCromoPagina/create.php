<?php
/* @var $this AlbumCromoPaginaController */
/* @var $model AlbumCromoPagina */

$this->breadcrumbs=array(
	'Album Cromo Paginas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlbumCromoPagina', 'url'=>array('index')),
	array('label'=>'Manage AlbumCromoPagina', 'url'=>array('admin')),
);
?>

<h1>Create AlbumCromoPagina</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>