<?php
/* @var $this ColeccioUsuariController */
/* @var $model ColeccioUsuari */

$this->breadcrumbs=array(
	'Coleccio Usuaris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ColeccioUsuari', 'url'=>array('index')),
	array('label'=>'Manage ColeccioUsuari', 'url'=>array('admin')),
);
?>

<h1>Create ColeccioUsuari</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>