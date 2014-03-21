<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/JS/preguntes_form.js');
$cs->registerCssFile($baseUrl.'/css/preguntes_form.css');

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


<div id="content">

    <table cellspacing="0">
    <tr>
    	<!--<th><?php echo $form->labelEx($model,'pregunta_id'); ?></th>-->
    	<th><?php echo $form->labelEx($model,'descripcio'); ?></th>
    </tr>
    <tr>
    	<!--<td><?php echo $form->textField($model,'pregunta_id'); ?>
		<?php echo $form->error($model,'pregunta_id'); ?></td>-->

		<!--Valor per defecte del camp pregunta_id-->
	    	<?php echo $form->hiddenField($model,'pregunta_id',array('value'=>'1'));?>
			<?php echo $form->error($model,'pregunta_id'); ?>

    	<td><?php echo $form->textArea($model,'descripcio'); ?>
		<?php echo $form->error($model,'descripcio'); ?></td>
    </tr>
	</table>
	<br/>
	<table>
		<tr>
			<th colspan="4">Relacions</th>
		</tr>
	    <tr>
	    	<td><?php echo $form->labelEx($model,'pregunta_1'); ?></td>
	    	<td><?php echo $form->labelEx($model,'resposta_1'); ?></td>
	    </tr>
	    <tr>
	    	<td><?php echo $form->textField($model,'pregunta_1'); ?>
			<?php echo $form->error($model,'pregunta_1'); ?></td>
	    	<td><?php echo $form->textField($model,'resposta_1'); ?>
			<?php echo $form->error($model,'resposta_1'); ?></td>
	    </tr>
	     <tr>
	    	<td><?php echo $form->labelEx($model,'pregunta_2'); ?></td>
	    	<td><?php echo $form->labelEx($model,'resposta_2'); ?></td>
	    </tr>
	    <tr>
	    	<td><?php echo $form->textField($model,'pregunta_2'); ?>
			<?php echo $form->error($model,'pregunta_2'); ?></td>
	    	<td><?php echo $form->textField($model,'resposta_2'); ?>
			<?php echo $form->error($model,'resposta_2'); ?></td>
	    </tr>
	     <tr>
	    	<td><?php echo $form->labelEx($model,'pregunta_3'); ?></td>
	    	<td><?php echo $form->labelEx($model,'resposta_3'); ?></td>
	    </tr>
	    <tr>
	    	<td><?php echo $form->textField($model,'pregunta_3'); ?>
			<?php echo $form->error($model,'pregunta_3'); ?></td>
	    	<td><?php echo $form->textField($model,'resposta_3'); ?>
			<?php echo $form->error($model,'resposta_3'); ?></td>
	    </tr>
	     <tr>
	    	<td><?php echo $form->labelEx($model,'pregunta_4'); ?></td>
	    	<td><?php echo $form->labelEx($model,'resposta_4'); ?></td>
	    </tr>
	    <tr>
	    	<td><?php echo $form->textField($model,'pregunta_4'); ?>
			<?php echo $form->error($model,'pregunta_4'); ?></td>
	    	<td><?php echo $form->textField($model,'resposta_4'); ?>
			<?php echo $form->error($model,'resposta_4'); ?></td>
	    </tr>
    </table>

</div>
<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->