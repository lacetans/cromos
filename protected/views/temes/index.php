<?php
/* @var $this TemesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temes',
);

$this->menu=array(
	array('label'=>'Create Temes', 'url'=>array('create')),
	array('label'=>'Manage Temes', 'url'=>array('admin')),
);
?>

<h1>Temes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
