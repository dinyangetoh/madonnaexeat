<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'exeat-form',
	'enableAjaxValidation' => true,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'student'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'student',
                                        'name' => 'Exeat[student]',
					'data'=>GxHtml::listDataEx(Student::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Student',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'student'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'purpose'); ?>
                     </td>
                     <td>
		<?php echo $form->textArea($model, 'purpose'); ?>
		<?php echo $form->error($model,'purpose'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'destination'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'destination', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'destination'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'proposed_date_out'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'proposed_date_out', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'proposed_date_out'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'proposed_days'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'proposed_days', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'proposed_days'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'proposed_date_in'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'proposed_date_in', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'proposed_date_in'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'approved_date_out'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'approved_date_out', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'approved_date_out'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'approved_days'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'approved_days', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'approved_days'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'expiring_date'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'expiring_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'expiring_date'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'approved_remark'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'approved_remark', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'approved_remark'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'sign_out_date'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'sign_out_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'sign_out_date'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'signed_out_by'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'signed_out_by', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'signed_out_by'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'expired'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'expired', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'expired'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'sign_in_remark'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'sign_in_remark', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'sign_in_remark'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'signed_in_by'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'signed_in_by', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'signed_in_by'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'status'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'status',
                                        'name' => 'Exeat[status]',
					'data'=>GxHtml::listDataEx(Status::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Status',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'status'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'entry_status'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'entry_status'); ?>
		<?php echo $form->error($model,'entry_status'); ?>
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