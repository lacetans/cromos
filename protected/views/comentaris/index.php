<?php
/* @var $this ComentarisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comentarises',
);

$this->menu=array(
	array('label'=>'Create Comentaris', 'url'=>array('create')),
	array('label'=>'Manage Comentaris', 'url'=>array('admin')),
);
?>

<h1>Comentarises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
