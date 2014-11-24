<?php
/* @var $this CategoriasController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cate_id'); ?>
		<?php echo $form->textField($model,'cate_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cate_nome'); ?>
		<?php echo $form->textField($model,'cate_nome',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cate_descricao'); ?>
		<?php echo $form->textField($model,'cate_descricao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->