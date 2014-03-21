<?php
/* @var $this AlbumCromoPaginaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Album Cromo Paginas',
);

$this->menu=array(
	array('label'=>'Create AlbumCromoPagina', 'url'=>array('create')),
	array('label'=>'Manage AlbumCromoPagina', 'url'=>array('admin')),
);
?>

<h1>Album Cromo Paginas</h1>
Cromos totals album: <?php $cromos_totals; ?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
