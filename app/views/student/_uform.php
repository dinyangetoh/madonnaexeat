<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'student-form',
	'enableAjaxValidation' => true,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'regno'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'regno', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'regno'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'department'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'department',
                                        'name' => 'Student[department]',
					'data'=>GxHtml::listDataEx(Department::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Department',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'department'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'level'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'level',
                                        'name' => 'Student[level]',
					'data'=>GxHtml::listDataEx(Level::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Level',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'level'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'state'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'attribute' =>'state',
                                        'name' => 'Student[state]',
					'data'=>GxHtml::listDataEx(State::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select State',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'state'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'hometown'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'hometown', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'hometown'); ?>
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