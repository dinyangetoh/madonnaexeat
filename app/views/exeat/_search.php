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
		<?php echo $form->label($model, 'student'); ?>
		<?php echo $form->dropDownList($model, 'student', GxHtml::listDataEx(Student::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'purpose'); ?>
		<?php echo $form->textArea($model, 'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'destination'); ?>
		<?php echo $form->textField($model, 'destination', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'proposed_date_out'); ?>
		<?php echo $form->textField($model, 'proposed_date_out', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'proposed_days'); ?>
		<?php echo $form->textField($model, 'proposed_days', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'proposed_date_in'); ?>
		<?php echo $form->textField($model, 'proposed_date_in', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'approved_date_out'); ?>
		<?php echo $form->textField($model, 'approved_date_out', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'approved_days'); ?>
		<?php echo $form->textField($model, 'approved_days', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'expiring_date'); ?>
		<?php echo $form->textField($model, 'expiring_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'approved_remark'); ?>
		<?php echo $form->textField($model, 'approved_remark', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sign_out_date'); ?>
		<?php echo $form->textField($model, 'sign_out_date', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'signed_out_by'); ?>
		<?php echo $form->textField($model, 'signed_out_by', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'expired'); ?>
		<?php echo $form->textField($model, 'expired', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sign_in_remark'); ?>
		<?php echo $form->textField($model, 'sign_in_remark', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'signed_in_by'); ?>
		<?php echo $form->textField($model, 'signed_in_by', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->dropDownList($model, 'status', GxHtml::listDataEx(Status::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'entry_status'); ?>
		<?php echo $form->textField($model, 'entry_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
