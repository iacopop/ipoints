<?php
/* @var $this PointController */
/* @var $data Point */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->point_id), array('view', 'id'=>$data->point_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
	<?php echo CHtml::encode($data->action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />


</div>