<?php
/* @var $this PreguntesYoutubeController */
/* @var $model PreguntesYoutube */

$this->breadcrumbs=array(
	'Preguntes Youtubes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreguntesYoutube', 'url'=>array('index')),
	array('label'=>'Manage PreguntesYoutube', 'url'=>array('admin')),
);
?>

<h1>Create PreguntesYoutube</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>