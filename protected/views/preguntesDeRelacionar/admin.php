<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */

$this->breadcrumbs=array(
	'Preguntes De Relacionars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PreguntesDeRelacionar', 'url'=>array('index')),
	array('label'=>'Create PreguntesDeRelacionar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#preguntes-de-relacionar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Preguntes De Relacionars</h1>

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
	'id'=>'preguntes-de-relacionar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pregunta_id',
		'descripcio',
		'pregunta_1',
		'resposta_1',
		'pregunta_2',
		/*
		'resposta_2',
		'pregunta_3',
		'resposta_3',
		'pregunta_4',
		'resposta_4',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
