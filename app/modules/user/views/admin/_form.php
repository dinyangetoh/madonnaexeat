<div class="form">
	<fieldset>
		<legend>New User</legend>


	

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
));
?>
<table>
	<tr>
		<td colspan="2">

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary(array($model,$profile)); ?>
</td>
	</tr>
	
<tr>
	<td>
		<?php echo $form->labelEx($model,'username'); ?>
	</td>
	<td>
		<?php echo $form->textField($model,'username',array('maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</td>
</tr>

	<tr><td>
		<?php echo $form->labelEx($model,'password'); ?>
	</td>
	<td>
		<?php echo $form->passwordField($model,'password',array('maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</td></tr>

	<tr><td>
		<?php echo $form->labelEx($model,'email'); ?>
	</td><td>
		<?php echo $form->textField($model,'email',array('maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</td></tr>

	


<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<tr><td>
		<?php echo $form->labelEx($profile,$field->varname); ?>
		</td>
	<td>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo CHtml::activeTextArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</td></tr>
			<?php
			}
		}
?>
<tr>
	<td>
		<?php echo $form->labelEx($model,'userrole'); ?>
		</td>
	<td>
            <?php echo $form->dropDownList($model,'userrole',GxHtml::listDataEx(Userroles::model()->findAll())); ?>
		<?php
                
                /*$this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$model,
					'name' =>'Userroles[userrole]',
					'attribute' =>'userrole',
					'data'=>GxHtml::listDataEx(Userroles::model()->findAll()),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Usertype',
					    'width'=>'auto',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); 
                 * 
                 */?>
    <?php echo $form->error($model,'userrole'); ?>
	</td></tr>

<tr>
	<td>
		<?php echo $form->labelEx($model,'superuser'); ?>
		</td>
	<td>
		<?php echo $form->dropDownList($model,'superuser',User::itemAlias('AdminStatus')); ?>
		<?php echo $form->error($model,'superuser'); ?>
	</td></tr>
<tr>
	<td>
		<?php echo $form->labelEx($model,'status'); ?>
		</td>
	<td>
		<?php echo $form->dropDownList($model,'status',User::itemAlias('UserStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
	</td></tr>
	<tr>
		<td colspan="2">
		<?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Save') : UserModule::t('Save')); ?>
	</td></tr>
</table>

<?php $this->endWidget(); ?>
</fieldset>
</div><!-- form -->