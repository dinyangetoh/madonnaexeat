<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'profiles-form',
	'enableAjaxValidation' => false,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'title'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'title', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'title'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'surname'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'surname', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'surname'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'othernames'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'othernames', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'othernames'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'gender'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'gender'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'occupation'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'occupation', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'occupation'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'photo'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'photo', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'photo'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'address'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'address', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'phonenumbers'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'phonenumbers', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'phonenumbers'); ?>
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