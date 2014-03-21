<?php
/* @var $this TblCommentsController */
/* @var $model TblComments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-comments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_name'); ?>
		<?php echo $form->textField($model,'owner_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'owner_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_id'); ?>
		<?php echo $form->textField($model,'owner_id'); ?>
		<?php echo $form->error($model,'owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_comment_id'); ?>
		<?php echo $form->textField($model,'parent_comment_id'); ?>
		<?php echo $form->error($model,'parent_comment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creator_id'); ?>
		<?php echo $form->textField($model,'creator_id'); ?>
		<?php echo $form->error($model,'creator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'comment_text'); ?>
		<?php echo $form->textArea($model,'comment_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_text'); ?>
		
	</div>
	
	<?php $this->widget('application.extensions.smileys.SmileysWidget',array(                    
	   	'group'=>'default',                    
	   	'cssFile'=>'smileys.css',
	   	'scriptFile'=>'smileys.js', 
	   	'containerCssClass'=>'smileys',
	   	'wrapperCssClass'=>'smiley',                       
	   	'textareaId'=>'TblComments_comment_text',
	   	'perRow'=>0,
	   	'forcePublish'=>false,
 		));?>
	<?php $this->endWidget();?>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	

</div><!-- form -->
