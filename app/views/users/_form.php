<div class="form">

    <fieldset>
     
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'users-form',
	'enableAjaxValidation' => false,
));



?>

	

	<?php echo $form->errorSummary($model); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'username'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'username', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'username'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'password'); ?>
                     </td>
                     <td>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'password'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'email'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'email', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'email'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'activkey'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'activkey', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'activkey'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'userrole'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'name' =>'userrole',
					'attribute' => $model['userrole'],
					'data'=>GxHtml::listDataEx(Userroles::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select userrole',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($model,'userrole'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'create_at'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'create_at'); ?>
		<?php echo $form->error($model,'create_at'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'lastvisit_at'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'lastvisit_at', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'lastvisit_at'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'superuser'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'superuser'); ?>
		<?php echo $form->error($model,'superuser'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($model,'status'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
                     </td>
                 </tr>
    
    
		 <tr><td>
		<?php echo $form->labelEx($model,'modfiedby'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($model, 'modfiedby', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'modfiedby'); ?>
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