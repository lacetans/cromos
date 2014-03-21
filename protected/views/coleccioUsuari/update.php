<?php
/* @var $this ColeccioUsuariController */
/* @var $model ColeccioUsuari */

$this->breadcrumbs=array(
	'Coleccio Usuaris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ColeccioUsuari', 'url'=>array('index')),
	array('label'=>'Create ColeccioUsuari', 'url'=>array('create')),
	array('label'=>'View ColeccioUsuari', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ColeccioUsuari', 'url'=>array('admin')),
);
?>

<h1>Update ColeccioUsuari <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>