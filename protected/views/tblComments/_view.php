<?php
/* @var $this TblCommentsController */
/* @var $data TblComments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comment_id), array('view', 'id'=>$data->comment_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_name')); ?>:</b>
	<?php echo CHtml::encode($data->owner_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_comment_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_comment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creator_id')); ?>:</b>
	<?php echo CHtml::encode($data->creator_id); ?>
	<br />
	<?php$this->widget('ext.multiselect.JMultiSelect',array(
      'model'=>$model,
      'attribute'=>'attribute',
      'data'=>$data,
      // additional javascript options for the MultiSelect plugin
      'options'=>array()
));?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_text')); ?>:</b>
	<?php echo CHtml::encode($data->comment_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>
