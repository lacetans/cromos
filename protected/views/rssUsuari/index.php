<?php
/* @var $this RssUsuariController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rss Usuaris',
);

$this->menu=array(
	array('label'=>'Create RssUsuari', 'url'=>array('create')),
	array('label'=>'Manage RssUsuari', 'url'=>array('admin')),
);
?>

<h1>Rss Usuaris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
