<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/JS/preguntes_form.js');
$cs->registerCssFile($baseUrl.'/css/preguntes_form.css');

/* @var $this PreguntesYoutubeController */
/* @var $model PreguntesYoutube */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preguntes-youtube-form',
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
    	<th><?php echo $form->labelEx($model,'pregunta'); ?></th>
    	<th><?php echo $form->labelEx($model,'resposta'); ?></th>
    </tr>
    <tr>
    	<!--<td> -->
    		<!--Valor per defecte del camp pregunta_id-->
	    	<?php echo $form->hiddenField($model,'pregunta_id',array('value'=>'6'));?>
			<?php echo $form->error($model,'pregunta_id'); ?>
		<!--</td>-->
		<td><?php echo $form->textField($model,'pregunta'); ?>
		<?php echo $form->error($model,'pregunta'); ?></td>
		<td><?php echo $form->textField($model,'resposta'); ?>
		<?php echo $form->error($model,'resposta'); ?></td>
    </tr>

    </table>
    <br/>

        <table cellspacing="0">
    <tr>
    	<th colspan="3">Dades opcionals</th>
    	
    </tr>
    <tr>
    	<td><?php echo $form->labelEx($model,'inici_video'); ?></td>
    	<td><?php echo $form->labelEx($model,'fi_video'); ?></td>
        <td><?php echo $form->labelEx($model,'video'); ?></td>
    </tr>
    <tr>
    	<td><?php echo $form->textField($model,'inici_video'); ?>
		<?php echo $form->error($model,'inici_video'); ?></td>
		<td><?php echo $form->textField($model,'fi_video'); ?>
		<?php echo $form->error($model,'fi_video'); ?></td>
        <td><?php echo $form->textField($model,'video'); ?>
        <?php echo $form->error($model,'video'); ?></td>
    </tr>

    </table>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->