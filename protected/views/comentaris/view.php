<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentarises'=>array('index'),
	$model->id,
);

$this->menu=array(
	
	array('label'=>'Create Comentaris', 'url'=>array('create')),
	array('label'=>'Update Comentaris', 'url'=>array('update', 'id'=>$model->id)),
	
	
);
?>

<h1>View Comentaris #<?php echo $model->id; ?></h1>
<?php
	Yii::import('application.extensions.smileys.SmileysParser');
	$content=$model->text;
	$content=SmileysParser::parse($content,'default');
?>
<img src="<?php Yii::app()->request->baseUrl; ?>img/foto.jpg" width="150px"/>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array ('label'=>$content),
		
	),
)); ?>
