<?php
/* @var $this RssController */
/* @var $model Rss */

$this->breadcrumbs=array(
	'Rsses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rss', 'url'=>array('index')),
	array('label'=>'Manage Rss', 'url'=>array('admin')),
);
?>

<h1>Create Rss</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>