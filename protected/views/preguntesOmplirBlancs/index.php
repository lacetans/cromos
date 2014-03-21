<?php
/* @var $this PreguntesOmplirBlancsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes Omplir Blancs',
);

$this->menu=array(
	array('label'=>'Create PreguntesOmplirBlancs', 'url'=>array('create')),
	array('label'=>'Manage PreguntesOmplirBlancs', 'url'=>array('admin')),
);
?>

<h1>Preguntes Omplir Blancs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
