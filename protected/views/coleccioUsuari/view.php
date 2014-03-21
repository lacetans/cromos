<?php
/* @var $this ColeccioUsuariController */
/* @var $model ColeccioUsuari */

$this->breadcrumbs=array(
	'Coleccio Usuaris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ColeccioUsuari', 'url'=>array('index')),
	array('label'=>'Create ColeccioUsuari', 'url'=>array('create')),
	array('label'=>'Update ColeccioUsuari', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ColeccioUsuari', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ColeccioUsuari', 'url'=>array('admin')),
);
?>

<h1>View ColeccioUsuari #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuari_id',
		'coleccio_id',
		'data_creacio',
	),
)); ?>
