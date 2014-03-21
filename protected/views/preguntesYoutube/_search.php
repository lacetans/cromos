<?php
/* @var $this PreguntesYoutubeController */
/* @var $model PreguntesYoutube */
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
		<?php echo $form->label($model,'pregunta'); ?>
		<?php echo $form->textField($model,'pregunta',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta'); ?>
		<?php echo $form->textField($model,'resposta',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inici_video'); ?>
		<?php echo $form->textField($model,'inici_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fi_video'); ?>
		<?php echo $form->textField($model,'fi_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregunta_id'); ?>
		<?php echo $form->textField($model,'pregunta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video'); ?>
		<?php echo $form->textField($model,'video',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->