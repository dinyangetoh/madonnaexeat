<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'surname'); ?>
		<?php echo $form->textField($model, 'surname', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'othernames'); ?>
		<?php echo $form->textField($model, 'othernames', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'gender'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'occupation'); ?>
		<?php echo $form->textField($model, 'occupation', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'photo'); ?>
		<?php echo $form->textField($model, 'photo', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phonenumbers'); ?>
		<?php echo $form->textField($model, 'phonenumbers', array('maxlength' => 10)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
