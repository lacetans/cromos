<?php
/* @var $this RssUsuariController */
/* @var $model RssUsuari */

$this->breadcrumbs=array(
	'Rss Usuaris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RssUsuari', 'url'=>array('index')),
	array('label'=>'Create RssUsuari', 'url'=>array('create')),
	array('label'=>'View RssUsuari', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RssUsuari', 'url'=>array('admin')),
);
?>

<h1>Update RssUsuari <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>