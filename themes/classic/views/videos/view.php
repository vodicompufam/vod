<?php
/* @var $this VideosController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->video_id,
);

$this->menu=array(
	array('label'=>'List Video', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Update Video', 'url'=>array('update', 'id'=>$model->video_id)),
	array('label'=>'Delete Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->video_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<h1>View Video #<?php echo $model->video_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'video_id',
		'video_nome',
		'video_descricao',
		'video_autor',
		'video_duracao',
		'video_tamanho',
		'video_data_upload',
		'video_total_visualizacoes',
		'video_data_ultimo_acesso',
		'video_extensao',
		'video_diretorio',
		'video_thumb',
		'video_status',
	),
)); ?>
