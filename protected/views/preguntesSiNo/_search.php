<?php
/* @var $this PreguntesSiNoController */
/* @var $model PreguntesSiNo */
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
		<?php echo $form->label($model,'pregunta_id'); ?>
		<?php echo $form->textField($model,'pregunta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcio'); ?>
		<?php echo $form->textArea($model,'descripcio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta'); ?>
		<?php echo $form->textField($model,'resposta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->