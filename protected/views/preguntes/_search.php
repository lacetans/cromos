<?php
/* @var $this PreguntesController */
/* @var $model preguntes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'preguntes'); ?>
		<?php echo $form->textField($model,'preguntes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipus'); ?>
		<?php echo $form->textField($model,'tipus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->