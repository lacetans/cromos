<?php
/* @var $this PreguntesYoutubeController */
/* @var $model PreguntesYoutube */

$this->breadcrumbs=array(
	'Preguntes Youtubes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesYoutube', 'url'=>array('index')),
	array('label'=>'Create PreguntesYoutube', 'url'=>array('create')),
	array('label'=>'View PreguntesYoutube', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesYoutube', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesYoutube <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>