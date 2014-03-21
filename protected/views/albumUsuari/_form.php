<?php
/* @var $this AlbumUsuariController */
/* @var $model AlbumUsuari */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'album-usuari-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuari_id'); ?>
		<?php echo $form->textField($model,'usuari_id'); ?>
		<?php echo $form->error($model,'usuari_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_id'); ?>
		<?php echo $form->textField($model,'album_id'); ?>
		<?php echo $form->error($model,'album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_creacio'); ?>
		<?php echo $form->textField($model,'data_creacio'); ?>
		<?php echo $form->error($model,'data_creacio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->