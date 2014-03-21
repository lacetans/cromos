<?php
/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $model PreguntesOpcioMultipleRespostaUnica */

$this->breadcrumbs=array(
	'Preguntes Opcio Multiple Resposta Unicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PreguntesOpcioMultipleRespostaUnica', 'url'=>array('index')),
	array('label'=>'Create PreguntesOpcioMultipleRespostaUnica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#preguntes-opcio-multiple-resposta-unica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Preguntes Opcio Multiple Resposta Unicas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'preguntes-opcio-multiple-resposta-unica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pregunta',
		'resposta_correcta',
		'resposta_2',
		'resposta_3',
		'resposta_4',
		/*
		'pregunta_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
