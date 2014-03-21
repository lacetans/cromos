<?php
/* @var $this CromosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cromoses',
);

$this->menu=array(
	array('label'=>'Create Cromos', 'url'=>array('create')),
	array('label'=>'Manage Cromos', 'url'=>array('admin')),
);
?>

<h1>Cromoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
