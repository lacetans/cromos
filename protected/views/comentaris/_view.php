<?php
/* @var $this ComentarisController */
/* @var $data Comentaris */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipus')); ?>:</b>
	<?php echo CHtml::encode($data->tipus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_extern')); ?>:</b>
	<?php echo CHtml::encode($data->id_extern); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pare')); ?>:</b>
	<?php echo CHtml::encode($data->pare); ?>
	<br />


</div>
