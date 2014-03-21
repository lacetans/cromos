<?php
/* @var $this ColeccioController */
/* @var $data Coleccio */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::encode($data->album_id); */
			echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
			<?php echo CHtml::encode($data->albums->nom); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cromo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cromo_id);*/
			echo CHtml::encode($data->getAttributeLabel('cromo_id')); ?>:</b>
			<?php echo CHtml::encode($data->cromos->descripcio); ?>
			<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuari_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuari_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegades')); ?>:</b>
	<?php echo CHtml::encode($data->vegades); ?>
	<br />


</div>
