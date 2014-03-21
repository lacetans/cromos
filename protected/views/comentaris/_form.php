<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentaris-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	
)); ?>
	<?php if (isset($tipus)) echo "<input type='hidden' value='$tipus' name='tipus' id='tipus'/>";?>
	<?php if (isset($pare)) echo "<input type='hidden' value='$pare' name='pare' id='pare'/>";?>
	<?php if (isset($id_extern)) echo "<input type='hidden' value='$id_extern' name='id_extern' id='id_extern'/>";?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<img src="<?php Yii::app()->request->baseUrl; ?>img/foto.jpg" width="150px"/>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6,'cols'=>50,'maxlength'=>65000)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>
	<div class="row">
	<?php $form->widget('application.extensions.smileys.SmileysWidget',array(                    
	   	'group'=>'default',                    
	   	'cssFile'=>'smileys.css',
	   	'scriptFile'=>'smileys.js', 
	   	'containerCssClass'=>'smileys',
	   	'wrapperCssClass'=>'smiley',            
	   	'textareaId'=>'Comentaris_text',
	   	'perRow'=>0,
	   	'forcePublish'=>false,
 		));?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
