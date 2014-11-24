<?php
/* @var $this UsuariosController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->usua_id,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->usua_id)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usua_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->usua_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usua_id',
		'usua_nome',
		'usua_data_nascimento',
		'usua_login',
		'usua_senha',
		'usua_tipo',
	),
)); ?>
