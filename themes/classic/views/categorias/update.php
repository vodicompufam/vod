<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->cate_id=>array('view','id'=>$model->cate_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'View Categoria', 'url'=>array('view', 'id'=>$model->cate_id)),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Update Categoria <?php echo $model->cate_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>