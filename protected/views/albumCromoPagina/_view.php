<?php
/* @var $this AlbumCromoPaginaController */
/* @var $data AlbumCromoPagina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::encode($data->album_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cromo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cromo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_id')); ?>:</b>
	<?php echo CHtml::encode($data->pagina_id); ?>
	<br />


</div>