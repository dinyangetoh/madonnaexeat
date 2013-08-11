<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'session'); ?>
		<?php echo $form->textField($model, 'session', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'semester'); ?>
		<?php echo $form->textField($model, 'semester', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'semester_start_date'); ?>
		<?php echo $form->textField($model, 'semester_start_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'semester_end_date'); ?>
		<?php echo $form->textField($model, 'semester_end_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
