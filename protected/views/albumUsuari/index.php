<?php
/* @var $this AlbumUsuariController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Album Usuaris',
);

$this->menu=array(
	array('label'=>'Create AlbumUsuari', 'url'=>array('create')),
	array('label'=>'Manage AlbumUsuari', 'url'=>array('admin')),
);
?>

<h1>Album Usuaris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
