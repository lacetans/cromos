<?php
/* @var $this PreguntesHospotController */
/* @var $model PreguntesHospot */

$this->breadcrumbs=array(
	'Preguntes Hospots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesHospot', 'url'=>array('index')),
	array('label'=>'Manage PreguntesHospot', 'url'=>array('admin')),
);
?>

<h1>Create PreguntesHospot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>