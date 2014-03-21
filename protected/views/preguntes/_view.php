<?php
/* @var $this PreguntesController */
/* @var $data preguntes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('preguntes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->preguntes), array('view', 'id'=>$data->preguntes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipus')); ?>:</b>
	<?php echo CHtml::encode($data->tipus); ?>
	<br />


</div>