<?php
/* @var $this CategoriasController */
/* @var $data Categoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cate_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cate_id), array('view', 'id'=>$data->cate_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cate_nome')); ?>:</b>
	<?php echo CHtml::encode($data->cate_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cate_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->cate_descricao); ?>
	<br />


</div>