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
		<?php echo $form->label($model, 'regno'); ?>
		<?php echo $form->textField($model, 'regno', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'department'); ?>
		<?php echo $form->dropDownList($model, 'department', GxHtml::listDataEx(Department::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'level'); ?>
		<?php echo $form->dropDownList($model, 'level', GxHtml::listDataEx(Level::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state'); ?>
		<?php echo $form->dropDownList($model, 'state', GxHtml::listDataEx(State::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hometown'); ?>
		<?php echo $form->textField($model, 'hometown', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'profile'); ?>
		<?php echo $form->dropDownList($model, 'profile', GxHtml::listDataEx(Profiles::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
