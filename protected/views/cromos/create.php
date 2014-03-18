<?php
/* @var $this CromosController */
/* @var $model Cromos */

$this->breadcrumbs=array(
	'Cromoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cromos', 'url'=>array('index')),
	array('label'=>'Manage Cromos', 'url'=>array('admin')),
);
?>

<h1>Create Cromos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>