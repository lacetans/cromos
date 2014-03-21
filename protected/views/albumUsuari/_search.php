<?php
/* @var $this AlbumUsuariController */
/* @var $model AlbumUsuari */
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
		<?php echo $form->label($model,'usuari_id'); ?>
		<?php echo $form->textField($model,'usuari_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_id'); ?>
		<?php echo $form->textField($model,'album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_creacio'); ?>
		<?php echo $form->textField($model,'data_creacio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->