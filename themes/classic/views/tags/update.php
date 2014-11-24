<?php
/* @var $this TagsController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->tags_id=>array('view','id'=>$model->tags_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tag', 'url'=>array('index')),
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'View Tag', 'url'=>array('view', 'id'=>$model->tags_id)),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>Update Tag <?php echo $model->tags_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>