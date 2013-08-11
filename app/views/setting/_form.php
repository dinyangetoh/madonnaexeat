<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'setting-form',
	'enableAjaxValidation' => true,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'session'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'session', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'session'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'semester'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'semester', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'semester'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'semester_start_date'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'semester_start_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'semester_start_date'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'semester_end_date'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'semester_end_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'semester_end_date'); ?>
                     </td>
                 </tr>

                 <tr><td></td>
                     <td>
<br>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success '));
$this->endWidget();
?>
                     </td>
                 </tr>
</table>

    </fieldset>
</div><!-- form -->