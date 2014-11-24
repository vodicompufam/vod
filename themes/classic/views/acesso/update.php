<?php
/* @var $this VideosController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->video_id=>array('view','id'=>$model->video_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Video', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'View Video', 'url'=>array('view', 'id'=>$model->video_id)),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<h1>Update Video <?php echo $model->video_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>