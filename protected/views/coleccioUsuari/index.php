<?php
/* @var $this ColeccioUsuariController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coleccio Usuaris',
);

$this->menu=array(
	array('label'=>'Create ColeccioUsuari', 'url'=>array('create')),
	array('label'=>'Manage ColeccioUsuari', 'url'=>array('admin')),
);
?>

<h1>Coleccio Usuaris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
