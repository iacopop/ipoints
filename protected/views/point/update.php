<?php
/* @var $this PointController */
/* @var $model Point */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->point_id=>array('view','id'=>$model->point_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Point', 'url'=>array('index')),
	array('label'=>'Create Point', 'url'=>array('create')),
	array('label'=>'View Point', 'url'=>array('view', 'id'=>$model->point_id)),
	array('label'=>'Manage Point', 'url'=>array('admin')),
);
?>

<h1>Update Point <?php echo $model->point_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>