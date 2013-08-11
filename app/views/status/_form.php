<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'status-form',
	'enableAjaxValidation' => true,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'name'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'name'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'access_level'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'access_level'); ?>
		<?php echo $form->error($model,'access_level'); ?>
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