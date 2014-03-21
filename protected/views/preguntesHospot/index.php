<?php
/* @var $this PreguntesHospotController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes Hospots',
);

$this->menu=array(
	array('label'=>'Create PreguntesHospot', 'url'=>array('create')),
	array('label'=>'Manage PreguntesHospot', 'url'=>array('admin')),
);
?>

<h1>Preguntes Hospots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
