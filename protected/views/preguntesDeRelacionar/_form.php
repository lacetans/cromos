<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preguntes-de-relacionar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta_id'); ?>
		<?php echo $form->textField($model,'pregunta_id'); ?>
		<?php echo $form->error($model,'pregunta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcio'); ?>
		<?php echo $form->textArea($model,'descripcio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta_1'); ?>
		<?php echo $form->textArea($model,'pregunta_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pregunta_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resposta_1'); ?>
		<?php echo $form->textArea($model,'resposta_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resposta_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta_2'); ?>
		<?php echo $form->textArea($model,'pregunta_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pregunta_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resposta_2'); ?>
		<?php echo $form->textArea($model,'resposta_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resposta_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta_3'); ?>
		<?php echo $form->textArea($model,'pregunta_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pregunta_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resposta_3'); ?>
		<?php echo $form->textArea($model,'resposta_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resposta_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta_4'); ?>
		<?php echo $form->textArea($model,'pregunta_4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pregunta_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resposta_4'); ?>
		<?php echo $form->textArea($model,'resposta_4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resposta_4'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->