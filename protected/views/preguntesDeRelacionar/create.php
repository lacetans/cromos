<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */

$this->breadcrumbs=array(
	'Preguntes De Relacionars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesDeRelacionar', 'url'=>array('index')),
	array('label'=>'Manage PreguntesDeRelacionar', 'url'=>array('admin')),
);
?>

<h1>Create PreguntesDeRelacionar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>