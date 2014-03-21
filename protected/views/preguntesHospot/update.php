<?php
/* @var $this PreguntesHospotController */
/* @var $model PreguntesHospot */

$this->breadcrumbs=array(
	'Preguntes Hospots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreguntesHospot', 'url'=>array('index')),
	array('label'=>'Create PreguntesHospot', 'url'=>array('create')),
	array('label'=>'View PreguntesHospot', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreguntesHospot', 'url'=>array('admin')),
);
?>

<h1>Update PreguntesHospot <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>