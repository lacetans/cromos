<?php
/* @var $this ColeccioController */
/* @var $model Coleccio */

$this->breadcrumbs=array(
	'Coleccios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coleccio', 'url'=>array('index')),
	array('label'=>'Manage Coleccio', 'url'=>array('admin')),
);
?>

<h1>Create Coleccio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>