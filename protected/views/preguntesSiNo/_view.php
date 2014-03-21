<?php
/* @var $this PreguntesSiNoController */
/* @var $data PreguntesSiNo */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta')); ?>:</b>
	<?php echo CHtml::encode($data->resposta); ?>
	<br />


</div>