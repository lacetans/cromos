<?php
/* @var $this PreguntesSiNoController */
/* @var $model PreguntesSiNo */

$this->breadcrumbs=array(
	'Preguntes Si Nos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesSiNo', 'url'=>array('index')),
	array('label'=>'Manage PreguntesSiNo', 'url'=>array('admin')),
);
?>

<h1>Creació preguntes Si/No</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>