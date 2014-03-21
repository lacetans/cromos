<?php
/* @var $this PreguntesDeRelacionarController */
/* @var $data PreguntesDeRelacionar */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_id')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_1')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_1')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_2')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_2')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_3')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_3')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_4')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_4')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_4); ?>
	<br />

	*/ ?>

</div>