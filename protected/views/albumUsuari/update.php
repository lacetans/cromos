<?php
/* @var $this AlbumUsuariController */
/* @var $model AlbumUsuari */

$this->breadcrumbs=array(
	'Album Usuaris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlbumUsuari', 'url'=>array('index')),
	array('label'=>'Create AlbumUsuari', 'url'=>array('create')),
	array('label'=>'View AlbumUsuari', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlbumUsuari', 'url'=>array('admin')),
);
?>

<h1>Update AlbumUsuari <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>