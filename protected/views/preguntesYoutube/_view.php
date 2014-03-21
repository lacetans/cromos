<?php
/* @var $this PreguntesYoutubeController */
/* @var $data PreguntesYoutube */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta')); ?>:</b>
	<?php echo CHtml::encode($data->resposta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inici_video')); ?>:</b>
	<?php echo CHtml::encode($data->inici_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fi_video')); ?>:</b>
	<?php echo CHtml::encode($data->fi_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_id')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video')); ?>:</b>
	<?php echo CHtml::encode($data->video); ?>
	<br />


</div>