<?php
/* @var $this CromosController */
/* @var $model Cromos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cromos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcio'); ?>
		<?php echo $form->textField($model,'descripcio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aprovat'); ?>
		<?php echo $form->textField($model,'aprovat'); ?>
		<?php echo $form->error($model,'aprovat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeracio'); ?>
		<?php echo $form->textField($model,'numeracio'); ?>
		<?php echo $form->error($model,'numeracio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
