<?php
/* @var $this VideosController */
/* @var $data Video */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->video_id), array('view', 'id'=>$data->video_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_nome')); ?>:</b>
	<?php echo CHtml::encode($data->video_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->video_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_autor')); ?>:</b>
	<?php echo CHtml::encode($data->video_autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_duracao')); ?>:</b>
	<?php echo CHtml::encode($data->video_duracao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_tamanho')); ?>:</b>
	<?php echo CHtml::encode($data->video_tamanho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_data_upload')); ?>:</b>
	<?php echo CHtml::encode($data->video_data_upload); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('video_total_visualizacoes')); ?>:</b>
	<?php echo CHtml::encode($data->video_total_visualizacoes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_data_ultimo_acesso')); ?>:</b>
	<?php echo CHtml::encode($data->video_data_ultimo_acesso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_extensao')); ?>:</b>
	<?php echo CHtml::encode($data->video_extensao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_diretorio')); ?>:</b>
	<?php echo CHtml::encode($data->video_diretorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->video_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_status')); ?>:</b>
	<?php echo CHtml::encode($data->video_status); ?>
	<br />

	*/ ?>

</div>