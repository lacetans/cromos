<?php
/* @var $this ImatgesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imatges',
);

$this->menu=array(
	array('label'=>'Create Imatges', 'url'=>array('create')),
	array('label'=>'Manage Imatges', 'url'=>array('admin')),
);
?>

<h1>Imatges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
