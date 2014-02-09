<?php
/* @var $this PointController */
/* @var $model Point */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->point_id,
);

$this->menu=array(
	array('label'=>'List Point', 'url'=>array('index')),
	array('label'=>'Create Point', 'url'=>array('create')),
	array('label'=>'Update Point', 'url'=>array('update', 'id'=>$model->point_id)),
	array('label'=>'Delete Point', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->point_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Point', 'url'=>array('admin')),
);
?>

<h1>View Point #<?php echo $model->point_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'point_id',
		'user_id',
		'action',
		'created_at',
	),
)); ?>
