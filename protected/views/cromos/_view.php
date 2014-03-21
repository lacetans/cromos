<?php
/* @var $this CromosController */
/* @var $data Cromos */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aprovat')); ?>:</b>
	<?php echo CHtml::encode($data->aprovat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeracio')); ?>:</b>
	<?php echo CHtml::encode($data->numeracio); ?>
	<br />


</div>
