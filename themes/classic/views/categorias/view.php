<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->cate_id,
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'Update Categoria', 'url'=>array('update', 'id'=>$model->cate_id)),
	array('label'=>'Delete Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cate_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>View Categoria #<?php echo $model->cate_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cate_id',
		'cate_nome',
		'cate_descricao',
	),
)); ?>
