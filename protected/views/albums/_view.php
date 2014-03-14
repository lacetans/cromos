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
	<script type="text/javascript">
		function afegirribbon () {
			$(document).ready( function() {
			  $('.side-corner-tag > img').addClass('.side-corner-tag p');
			  $('.side-corner-tag > img').addClass('.side-corner-tag p span');
			  $('.side-corner-tag > img').addClass('.side-corner-tag p:before');
			  $('.side-corner-tag > img').addClass('.side-corner-tag p:after');
			  $( ".side-corner-tag" ).append( "<p><span>Novetat</span></p>" );
			} );
		}
	</script>


	<div class="side-corner-tag">
	    <img src="<?php echo CHtml::encode($data->portada); ?>" onload="afegirribbon()"/>
	</div>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('aprovat')); ?>:</b>
	<?php echo CHtml::encode($data->aprovat); ?>
	<br />


</div>