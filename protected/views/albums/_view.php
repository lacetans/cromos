<?php
/* @var $this AlbumsController */
/* @var $data Albums */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portada')); ?>:</b>
	<?php echo CHtml::encode($data->portada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aprovat')); ?>:</b>
	<?php echo CHtml::encode($data->aprovat); ?>
	<br />


</div>