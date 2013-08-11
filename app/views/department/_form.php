<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'department-form',
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
		<?php echo $form->labelEx($model,'faculty'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'faculty',
					'name' => 'Department[faculty]',
					'data'=>GxHtml::listDataEx(Faculty::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Faculty',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'faculty'); ?>
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