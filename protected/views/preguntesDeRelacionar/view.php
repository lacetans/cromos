<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */

$this->breadcrumbs=array(
	'Preguntes De Relacionars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PreguntesDeRelacionar', 'url'=>array('index')),
	array('label'=>'Create PreguntesDeRelacionar', 'url'=>array('create')),
	array('label'=>'Update PreguntesDeRelacionar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PreguntesDeRelacionar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PreguntesDeRelacionar', 'url'=>array('admin')),
);
?>

<h1>View PreguntesDeRelacionar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pregunta_id',
		'descripcio',
		'pregunta_1',
		'resposta_1',
		'pregunta_2',
		'resposta_2',
		'pregunta_3',
		'resposta_3',
		'pregunta_4',
		'resposta_4',
	),
)); ?>
