<?php
/* @var $this PreguntesYoutubeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes Youtubes',
);

$this->menu=array(
	array('label'=>'Create PreguntesYoutube', 'url'=>array('create')),
	array('label'=>'Manage PreguntesYoutube', 'url'=>array('admin')),
);
?>

<h1>Preguntes Youtubes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
