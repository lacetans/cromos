<?php
/* @var $this PreguntesOmplirBlancsController */
/* @var $model PreguntesOmplirBlancs */

$this->breadcrumbs=array(
	'Preguntes Omplir Blancs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesOmplirBlancs', 'url'=>array('index')),
	array('label'=>'Manage PreguntesOmplirBlancs', 'url'=>array('admin')),
);
?>

<h1>Creació preguntes omplir els blancs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>