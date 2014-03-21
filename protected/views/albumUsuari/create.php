<?php
/* @var $this AlbumUsuariController */
/* @var $model AlbumUsuari */

$this->breadcrumbs=array(
	'Album Usuaris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlbumUsuari', 'url'=>array('index')),
	array('label'=>'Manage AlbumUsuari', 'url'=>array('admin')),
);
?>

<h1>Create AlbumUsuari</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>