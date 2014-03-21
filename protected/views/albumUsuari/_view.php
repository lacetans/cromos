<?php
/* @var $this AlbumUsuariController */
/* @var $data AlbumUsuari */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuari_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuaris->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::encode($data->albums->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_creacio')); ?>:</b>
	<?php echo CHtml::encode($data->data_creacio); ?>
	<br />


</div>