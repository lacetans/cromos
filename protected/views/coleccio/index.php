<?php
/* @var $this ColeccioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coleccios',
);

$this->menu=array(
	array('label'=>'Create Coleccio', 'url'=>array('create')),
	array('label'=>'Manage Coleccio', 'url'=>array('admin')),
);
?>

<h1>Coleccios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
