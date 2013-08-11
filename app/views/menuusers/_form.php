<div class="form">

    <fieldset><legend></legend>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'menuusers-form',
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
		<?php echo $form->labelEx($model,'osi_menuitems_id'); ?>
                     </td>
                     <td>
		<?php echo $form->dropDownList($model, 'osi_menuitems_id', GxHtml::listDataEx(Menuitems::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'osi_menuitems_id'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'osi_roles_id'); ?>
                     </td>
                     <td>
		<?php echo $form->dropDownList($model, 'osi_roles_id', GxHtml::listDataEx(Userroles::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'osi_roles_id'); ?>
                     </td>
                 </tr>
    
    
    
    

                 <tr><td></td>
                     <td>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn primary'));
$this->endWidget();
?>
                     </td>
                 </tr>
</table>

    </fieldset>
</div><!-- form -->