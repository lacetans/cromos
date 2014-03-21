<?php
/* @var $this ColeccioUsuariController */
/* @var $data ColeccioUsuari */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuari_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuari_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coleccio_id')); ?>:</b>
	<?php echo CHtml::encode($data->coleccio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_creacio')); ?>:</b>
	<?php echo CHtml::encode($data->data_creacio); ?>
	<br />


</div>