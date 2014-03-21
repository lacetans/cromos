<?php
/* @var $this CromosController */
/* @var $model Cromos */
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
		<?php echo $form->label($model,'descripcio'); ?>
		<?php echo $form->textField($model,'descripcio',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aprovat'); ?>
		<?php echo $form->textField($model,'aprovat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeracio'); ?>
		<?php echo $form->textField($model,'numeracio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->