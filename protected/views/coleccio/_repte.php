<?php
/* @var $this UsuarisController */
/* @var $data Usuaris */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->albums->nom), array('repte_usuari', 'id'=>$data->album_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cromo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cromos->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuari_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuaris->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegades')); ?>:</b>
	<?php echo CHtml::encode($data->vegades); ?>
	<br />

</div>