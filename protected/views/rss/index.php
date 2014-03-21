<?php
/* @var $this RssController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rsses',
);

$this->menu=array(
	array('label'=>'Create Rss', 'url'=>array('create')),
	array('label'=>'Manage Rss', 'url'=>array('admin')),
);
?>

<h1>Rsses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
