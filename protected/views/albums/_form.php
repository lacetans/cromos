<?php
/* @var $this AlbumsController */
/* @var $model Albums */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'albums-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textArea($model,'nom',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcio'); ?>
		<?php echo $form->textArea($model,'descripcio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portada'); ?>
		<?php echo $form->textArea($model,'portada',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'portada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aprovat'); ?>
		<?php echo $form->textField($model,'aprovat'); ?>
		<?php echo $form->error($model,'aprovat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->