<?php
/* @var $this PreguntesOpcioMultipleRespostaUnicaController */
/* @var $data PreguntesOpcioMultipleRespostaUnica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_correcta')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_correcta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_2')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_3')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_4')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_id')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_id); ?>
	<br />


</div>