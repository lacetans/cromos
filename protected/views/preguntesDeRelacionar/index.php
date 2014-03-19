<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes De Relacionars',
);

$this->menu=array(
	array('label'=>'Create PreguntesDeRelacionar', 'url'=>array('create')),
	array('label'=>'Manage PreguntesDeRelacionar', 'url'=>array('admin')),
);
?>

<h1>Preguntes De Relacionars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
