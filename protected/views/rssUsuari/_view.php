<?php
/* @var $this RssUsuariController */
/* @var $data RssUsuari */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rss_id')); ?>:</b>
	<?php echo CHtml::encode($data->rss_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuari_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuari_id); ?>
	<br />


</div>