<?php
/* @var $this TagsController */
/* @var $model Tag */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tags_id'); ?>
		<?php echo $form->textField($model,'tags_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tags_nome'); ?>
		<?php echo $form->textField($model,'tags_nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->