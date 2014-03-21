<?php
/* @var $this ImatgesController */
/* @var $model Imatges */

$this->breadcrumbs=array(
	'Imatges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imatges', 'url'=>array('index')),
	array('label'=>'Manage Imatges', 'url'=>array('admin')),
);
?>

<h1>Create Imatges</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>