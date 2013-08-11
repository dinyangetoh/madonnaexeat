<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->user_id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->user_id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h3><?php echo $model->user->userrole0; ?> | <?php $profilename=$model->title." ".$model->othernames." ".$model->surname; echo $profilename; ?>'s Profile</h3>

<table class="table table-striped">
	<tr class="even">
		<th>Surname</th> 
		<td><?php echo $model->surname; ?></td>
		<td rowspan="4" height="120" width="140">
			<?php if(empty($model->photo)){ 
				?>

			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/no_photo.jpg" class="thumbnail" ?>
			


			<?php }else{

			 ?>
			 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/users/<?php echo $model->photo; ?>" class="thumbnail" ?>

         
                             <?php }  ?>
                         <a href="#" id="uploadfile">Click Here to Upload</a>
         <div class="upload" style="display:none;">
			<form method="post" action="/osisatech/www/profiles/upload" enctype="multipart/form-data">
<input type="file" name="Profiles[photo]">
<input type="hidden" name="user_id" value="<?php echo $model->user_id; ?>">
<input type="submit" value="Upload">
</form>
             </div>
         <script type="text/javascript">
	   
$('#uploadfile').click(function() {
	    $('.upload').toggle();
	    return true;
	});
         </script>
		</td>
	</tr>
	<tr class="odd">
		<th>Other Names</th>
		<td><?php echo $model->othernames; ?></td>
	</tr>
	<tr class="even">
		<th>Gender</th>
		<td><?php echo $model->gender; ?></td>
	</tr>
	<tr class="odd">
		<th>Occupation</td>
		<td><?php echo $model->occupation; ?></td>
	</tr>

	<tr class="even">
		<th>Residential Address</td>
		<td><?php echo $model->address; ?></td>
		<td></td>
	</tr>
	<tr class="odd">
		<th>Phone Number(s)</td>
		<td><?php echo $model->phonenumbers; ?></td>
		<td></td>
	</tr>
	<tr class="even">
		<th>Email</td>
		<td><?php echo $model->user->email;  ?></td>
		<td></td>
	</tr>
	<tr class="odd">
		<th>Username</td>
		<td><?php echo $model->user->username; ?></td>
		<td>


<div class="modal hide fade" id="addStudent">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h4>New Student</h4>
  </div>
  <div class="modal-body">
    
    <div class="form">

    <fieldset>
     
<?php 
$student=new Student;

$form = $this->beginWidget('GxActiveForm', array(
	'id' => 'student-form',
	'enableAjaxValidation' => true,
	'action'=>$this->createurl('/student/new'),

));



?>

	

	<?php echo $form->errorSummary($student); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($student,'regno'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'regno', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'regno'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'surname'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'surname', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'surname'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'other_names'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'other_names', array('maxlength' => 100)); ?>
		<?php echo $form->error($student,'other_names'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'sex'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'sex', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'sex'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'state_of_origin'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$student,
					'attribute' =>'state_of_origin',
					'name' => 'Student[state_of_origin]',
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
		<?php echo $form->error($student,'state_of_origin'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'lga_of_origin'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'lga_of_origin', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'lga_of_origin'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'dob'); ?>
                     </td>
                     <td>
		
		<?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
					'model'=>$student,
					'attribute' =>'dob',
					'name' => 'Student[dob]',
					

					
)); ?>
		<?php echo $form->error($student,'dob'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'admission_class'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'admission_class', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'admission_class'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'admission_session'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'admission_session', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'admission_session'); ?>
                     </td>
                 </tr>
    
		
    
		 <tr><td>
		<?php echo $form->labelEx($student,'parent_or_guardian'); ?>
                     </td>
                     <td>
		<?php echo $profilename; echo $form->hiddenField($student, 'parent_or_guardian', array('value' =>$model->user_id)); ?>
		<?php echo $form->error($student,'parent_or_guardian'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($student,'parent_or_guardian_relationship'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($student, 'parent_or_guardian_relationship', array('maxlength' => 45)); ?>
		<?php echo $form->error($student,'parent_or_guardian_relationship'); ?>
                     </td>
                 </tr>
    
    
    
    

                 <tr><td></td>
                     <td>
<?php // $url='/student/create';
    //echo CHtml::ajaxSubmitButton('Add Details',array($url),array('update'=>'#qresult'),array('class'=>'btn btn-primary','data-dismiss'=>'modal'));
    ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success '));
$this->endWidget();
?>
                     </td>
                 </tr>
</table>

    </fieldset>
</div><!-- form -->

  </div>
  
</div>

<a class="btn btn-primary" data-toggle="modal" href="#addStudent" >Add Student</a>
<div class="addStudent">
</div>

		</td>
	</tr>

</table>

<h3>My Students</h3>

<?php 

$studentdata=new CActiveDataProvider('Student');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'student-grid',
	'dataProvider' => $studentdata,
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'columns' => array(
		 array(
            'class'=>'CLinkColumn',
            'header'=>'Reg Number',
            'labelExpression'=>'$data->regno',
           'urlExpression'=>'"/osisatech/www/student/update/".$data->id',
            //'imageUrl'=> Yii::app()->createUrl("employee/details", array("id"=>$data->id)),
        ),
		'regno',
		'surname',
		'other_names',
		'sex',
		
		/*
		'lga_of_origin',
		'dob',
		'admission_class',
		'admission_session',
		'current_class',
		'fee_status',
		'parent_or_guardian',
		'parent_or_guardian_relationship',
		*/
		
	),
)); ?>



