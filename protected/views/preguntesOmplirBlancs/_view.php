<?php
/* @var $this PreguntesOmplirBlancsController */
/* @var $data PreguntesOmplirBlancs */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_id')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_id); ?>
	<br />


</div>