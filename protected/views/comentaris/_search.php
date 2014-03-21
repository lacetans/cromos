<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */
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
		<?php echo $form->label($model,'tipus'); ?>
		<?php echo $form->textField($model,'tipus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>65000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_extern'); ?>
		<?php echo $form->textField($model,'id_extern'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pare'); ?>
		<?php echo $form->textField($model,'pare'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->