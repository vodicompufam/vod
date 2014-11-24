<?php
/* @var $this TagsController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->tags_id,
);

$this->menu=array(
	array('label'=>'List Tag', 'url'=>array('index')),
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'Update Tag', 'url'=>array('update', 'id'=>$model->tags_id)),
	array('label'=>'Delete Tag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tags_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>View Tag #<?php echo $model->tags_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tags_id',
		'tags_nome',
	),
)); ?>
