<?php
/* @var $this VideosController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'video_nome'); ?>
		<?php echo $form->textField($model,'video_nome',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'video_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_descricao'); ?>
		<?php echo $form->textField($model,'video_descricao',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'video_descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_autor'); ?>
		<?php echo $form->textField($model,'video_autor'); ?>
		<?php echo $form->error($model,'video_autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_duracao'); ?>
		<?php echo $form->textField($model,'video_duracao'); ?>
		<?php echo $form->error($model,'video_duracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_tamanho'); ?>
		<?php echo $form->textField($model,'video_tamanho',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'video_tamanho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_data_upload'); ?>
		<?php echo $form->textField($model,'video_data_upload'); ?>
		<?php echo $form->error($model,'video_data_upload'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_total_visualizacoes'); ?>
		<?php echo $form->textField($model,'video_total_visualizacoes',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'video_total_visualizacoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_data_ultimo_acesso'); ?>
		<?php echo $form->textField($model,'video_data_ultimo_acesso'); ?>
		<?php echo $form->error($model,'video_data_ultimo_acesso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_extensao'); ?>
		<?php echo $form->textField($model,'video_extensao',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'video_extensao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_diretorio'); ?>
		<?php echo $form->textField($model,'video_diretorio',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'video_diretorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_thumb'); ?>
		<?php echo $form->textField($model,'video_thumb',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'video_thumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_status'); ?>
		<?php echo $form->textField($model,'video_status'); ?>
		<?php echo $form->error($model,'video_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->