<?php
/* @var $this VideosController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_nome'); ?>
		<?php echo $form->textField($model,'video_nome',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_descricao'); ?>
		<?php echo $form->textField($model,'video_descricao',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_autor'); ?>
		<?php echo $form->textField($model,'video_autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_duracao'); ?>
		<?php echo $form->textField($model,'video_duracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_tamanho'); ?>
		<?php echo $form->textField($model,'video_tamanho',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_data_upload'); ?>
		<?php echo $form->textField($model,'video_data_upload'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_total_visualizacoes'); ?>
		<?php echo $form->textField($model,'video_total_visualizacoes',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_data_ultimo_acesso'); ?>
		<?php echo $form->textField($model,'video_data_ultimo_acesso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_extensao'); ?>
		<?php echo $form->textField($model,'video_extensao',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_diretorio'); ?>
		<?php echo $form->textField($model,'video_diretorio',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_thumb'); ?>
		<?php echo $form->textField($model,'video_thumb',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_status'); ?>
		<?php echo $form->textField($model,'video_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->