<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $model PreguntesDeRelacionar */
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
		<?php echo $form->label($model,'pregunta_1'); ?>
		<?php echo $form->textArea($model,'pregunta_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_1'); ?>
		<?php echo $form->textArea($model,'resposta_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregunta_2'); ?>
		<?php echo $form->textArea($model,'pregunta_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_2'); ?>
		<?php echo $form->textArea($model,'resposta_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregunta_3'); ?>
		<?php echo $form->textArea($model,'pregunta_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_3'); ?>
		<?php echo $form->textArea($model,'resposta_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregunta_4'); ?>
		<?php echo $form->textArea($model,'pregunta_4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_4'); ?>
		<?php echo $form->textArea($model,'resposta_4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->