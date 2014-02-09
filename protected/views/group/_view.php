<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->group_id), array('view', 'id'=>$data->group_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('required_points')); ?>:</b>
	<?php echo CHtml::encode($data->required_points); ?>
	<br />


</div>