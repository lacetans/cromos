<?php
/* @var $this UsuarisController */
/* @var $data Usuaris */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('data_creacio')); ?>:</b>
	<?php echo CHtml::encode($data->data_creacio); ?>
	<br />


</div>