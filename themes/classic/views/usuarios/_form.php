<?php
/* @var $this UsuariosController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_id'); ?>
		<?php echo $form->textField($model,'usua_id'); ?>
		<?php echo $form->error($model,'usua_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_nome'); ?>
		<?php echo $form->textField($model,'usua_nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usua_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_data_nascimento'); ?>
		<?php echo $form->textField($model,'usua_data_nascimento'); ?>
		<?php echo $form->error($model,'usua_data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_login'); ?>
		<?php echo $form->textField($model,'usua_login',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usua_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_senha'); ?>
		<?php echo $form->textField($model,'usua_senha',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usua_senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usua_tipo'); ?>
		<?php echo $form->textField($model,'usua_tipo'); ?>
		<?php echo $form->error($model,'usua_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->