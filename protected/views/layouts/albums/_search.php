<?php
/* @var $this AlbumsController */
/* @var $model Albums */
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
		<?php echo $form->label($model,'nom'); ?>
		<?php echo $form->textField($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcio'); ?>
		<?php echo $form->textField($model,'descripcio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portada'); ?>
		<?php echo $form->textField($model,'portada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aprovat'); ?>
		<?php echo $form->textField($model,'aprovat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_cromos'); ?>
		<?php echo $form->textField($model,'total_cromos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->