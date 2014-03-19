<?php
/* @var $this TemesController */
/* @var $model Temes */

$this->breadcrumbs=array(
	'Preguntes'=>array('index'),
	$model->preguntes,
);


?>

<?php print_r($model->PreguntesDeRelacionar->descripcio);?>

<h1>View Preguntes #<?php echo $model->preguntes; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'preguntes',
		'tipus',
		'aprovada'
	),
)); ?>
