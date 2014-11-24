<?php
/* @var $this UsuariosController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->usua_id=>array('view','id'=>$model->usua_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->usua_id)),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->usua_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>