<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<?php

$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/JS/preguntes_form.js');
$cs->registerCssFile($baseUrl.'/css/preguntes_form.css');


/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $model PreguntesOpcioMultipleRespostaUnica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preguntes-opcio-multiple-resposta-unica-form',
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
    	<!--<th><?php echo $form->labelEx($model,'id'); ?></th>-->
    	<th><?php echo $form->labelEx($model,'pregunta'); ?></th>
    	<!--<th><?php echo $form->labelEx($model,'pregunta_id'); ?></th>-->

    </tr>
    <tr>
    	<!--<td><?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?></td>-->
    	<td><?php echo $form->textField($model,'pregunta'); ?>
		<?php echo $form->error($model,'pregunta'); ?></td>
		<!--<td><?php echo $form->textField($model,'pregunta_id'); ?>
		<?php echo $form->error($model,'pregunta_id'); ?></td>-->
		<!--Valor per defecte del camp pregunta_id-->
	    	<?php echo $form->hiddenField($model,'pregunta_id',array('value'=>'5'));?>
			<?php echo $form->error($model,'pregunta_id'); ?>
    </tr>
    </table>

    <br/>

    <table cellspacing="0">
    <tr>
    	<th colspan="2">RESPOSTES</th>
    </tr>
    <tr>
    	<td><?php echo $form->labelEx($model,'resposta_correcta'); ?></td>
    	<td>
    		<?php echo $form->textField($model,'resposta_correcta',array('size'=>60,'maxlength'=>200)); ?>
    		<?php echo $form->error($model,'resposta_correcta'); ?>
    	</td>

    </tr>
     <tr>
    	<td><?php echo $form->labelEx($model,'resposta_2'); ?></td>
    	<td>
    		<?php echo $form->textField($model,'resposta_2',array('size'=>60,'maxlength'=>200)); ?>
    		<?php echo $form->error($model,'resposta_2'); ?>
    	</td>

    </tr>
     <tr>
    	<td><?php echo $form->labelEx($model,'resposta_3'); ?></td>
    	<td>
    		<?php echo $form->textField($model,'resposta_3',array('size'=>60,'maxlength'=>200)); ?>
    		<?php echo $form->error($model,'resposta_3'); ?>
    	</td>

    </tr>
    <tr>
    	<td><?php echo $form->labelEx($model,'resposta_4'); ?></td>
    	<td>
    		<?php echo $form->textField($model,'resposta_4',array('size'=>60,'maxlength'=>200)); ?>
    		<?php echo $form->error($model,'resposta_4'); ?>
    	</td>

    </tr>
    </table>

</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->