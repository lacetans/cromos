<?php
/* @var $this TemesController */
/* @var $data Temes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcio); ?>
	<br />


</div>