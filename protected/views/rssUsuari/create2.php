<?php
/* @var $this RssUsuariController */
/* @var $model RssUsuari */

$this->breadcrumbs=array(
	'Rss Usuaris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RssUsuari', 'url'=>array('index')),
	array('label'=>'Manage RssUsuari', 'url'=>array('admin')),
);
?>

<h1>Create RssUsuari</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>