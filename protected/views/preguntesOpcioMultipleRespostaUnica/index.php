<?php
/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preguntes Opcio Multiple Resposta Unicas',
);

$this->menu=array(
	array('label'=>'Create PreguntesOpcioMultipleRespostaUnica', 'url'=>array('create')),
	array('label'=>'Manage PreguntesOpcioMultipleRespostaUnica', 'url'=>array('admin')),
);
?>

<h1>Preguntes Opcio Multiple Resposta Unicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
