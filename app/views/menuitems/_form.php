<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'menuitems-form',
	'enableAjaxValidation' => false,
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
		<?php echo $form->labelEx($model,'url'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'url', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'url'); ?>
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