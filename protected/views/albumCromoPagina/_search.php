<?php
/* @var $this AlbumCromoPaginaController */
/* @var $model AlbumCromoPagina */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_id'); ?>
		<?php echo $form->textField($model,'album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cromo_id'); ?>
		<?php echo $form->textField($model,'cromo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagina_id'); ?>
		<?php echo $form->textField($model,'pagina_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->