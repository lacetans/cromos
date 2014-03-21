<?php
/* @var $this AlbumCromoPaginaController */
/* @var $model AlbumCromoPagina */

$this->breadcrumbs=array(
	'Album Cromo Paginas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AlbumCromoPagina', 'url'=>array('index')),
	array('label'=>'Create AlbumCromoPagina', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#album-cromo-pagina-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Album Cromo Paginas</h1>

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
	'id'=>'album-cromo-pagina-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'album_id',
		'cromo_id',
		'pagina_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
