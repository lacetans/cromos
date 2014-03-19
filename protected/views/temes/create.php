<?php
/* @var $this TemesController */
/* @var $model Temes */

$this->breadcrumbs=array(
	'Temes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Temes', 'url'=>array('index')),
	array('label'=>'Manage Temes', 'url'=>array('admin')),
);
?>

<h1>Create Temes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>