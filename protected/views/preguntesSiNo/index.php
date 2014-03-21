<?php
/* @var $this PreguntesSiNoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes Si Nos',
);

$this->menu=array(
	array('label'=>'Create PreguntesSiNo', 'url'=>array('create')),
	array('label'=>'Manage PreguntesSiNo', 'url'=>array('admin')),
);
?>

<h1>Preguntes Si Nos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
