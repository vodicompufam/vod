<?php
/* @var $this CategoriasController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cate_nome'); ?>
		<?php echo $form->textField($model,'cate_nome',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'cate_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cate_descricao'); ?>
		<?php echo $form->textField($model,'cate_descricao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cate_descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->