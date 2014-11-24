<?php
/* @var $this TagsController */
/* @var $data Tag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tags_id), array('view', 'id'=>$data->tags_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags_nome')); ?>:</b>
	<?php echo CHtml::encode($data->tags_nome); ?>
	<br />


</div>