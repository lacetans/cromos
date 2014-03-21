<?php
/* @var $this PreguntesController */
/* @var $model preguntes */

$this->breadcrumbs=array(
	'Preguntes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List preguntes', 'url'=>array('index')),
	array('label'=>'Manage preguntes', 'url'=>array('admin')),
);
?>

<h1>Create preguntes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>