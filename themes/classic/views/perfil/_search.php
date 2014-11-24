<?php
/* @var $this UsuariosController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'usua_id'); ?>
		<?php echo $form->textField($model,'usua_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usua_nome'); ?>
		<?php echo $form->textField($model,'usua_nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usua_data_nascimento'); ?>
		<?php echo $form->textField($model,'usua_data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usua_login'); ?>
		<?php echo $form->textField($model,'usua_login',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usua_senha'); ?>
		<?php echo $form->textField($model,'usua_senha',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usua_tipo'); ?>
		<?php echo $form->textField($model,'usua_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->