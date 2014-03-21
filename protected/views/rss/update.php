<?php
/* @var $this RssController */
/* @var $model Rss */

$this->breadcrumbs=array(
	'Rsses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rss', 'url'=>array('index')),
	array('label'=>'Create Rss', 'url'=>array('create')),
	array('label'=>'View Rss', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rss', 'url'=>array('admin')),
);
?>

<h1>Update Rss <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>