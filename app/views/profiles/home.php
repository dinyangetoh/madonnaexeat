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

<h3><?php echo $model->user->userrole0; ?> |<?php echo $model->user->name; ?> 's Profile</h3>

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
			<form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/profiles/upload" enctype="multipart/form-data">
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
	

	<tr class="even">
		<th>Residential Address</td>
		<td><?php echo $model->address; ?></td>
		
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
        
        <?php $flag=0; $student=Student::model()->findByPk(Yii::app()->user->id);
                
                 if(empty($student)){
                     $flag=1;
                     $studentadmin=Student::model()->find(array("condition"=>"profile=$model->user_id"));
                     if(!empty($studentadmin)){
                        $student=Student::model()->findByPk($studentadmin->id);
                     }
                 }
        
        
                                            if(!empty($student)){
                                                ?>
                                           
	<tr class="odd">
		<th>Matric Number</td>
		<td><?php echo $student->regno; ?></td>
		<td>



		</td>
	</tr>
        <tr class="even">
	<th>Department</td>
		<td><?php echo $student->department0;  ?></td>
		<td></td>
	</tr>
        <tr class="odd">
		<th>Level</td>
		<td><?php echo $student->level0; ?></td>
		<td>



		</td>
	</tr>
        <tr class="even">
	<th>State</td>
		<td><?php echo $student->state0;  ?></td>
		<td></td>
	</tr>
         <tr class="even">
	<th>Home Town</td>
		<td><?php echo $student->hometown;  ?></td>
		<td></td>
	</tr>
        
                                            <?php } ?>
</table>

<?php if($flag==0){ ?>

<div class="modal hide fade" id="addStudent">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h4>New Exeat Request Form</h4>
  </div>
  <div class="modal-body">
    
 

<div class="form">

    <fieldset>
     
<?php

$exeat=new Exeat;
$form = $this->beginWidget('GxActiveForm', array(
	'id' => 'exeat-form',
	'enableAjaxValidation' => true,
    'action'=>$this->createurl('/exeat/create'),
));



?>

	

	<?php echo $form->errorSummary($exeat); ?>
<table cellspacing="3">
   
    
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'student'); ?>
                     </td>
                     <td>
                         <?php echo $form->hiddenField($exeat, 'student', array('value' =>$student->id)); ?>
		<?php echo $student->regno; ?>
                         
		<?php echo $form->error($exeat,'student'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'purpose'); ?>
                     </td>
                     <td>
		<?php echo $form->textArea($exeat, 'purpose'); ?>
		<?php echo $form->error($exeat,'purpose'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'destination'); ?>
                     </td>
                     <td>
		<?php echo $form->textField($exeat, 'destination', array('maxlength' => 45)); ?>
		<?php echo $form->error($exeat,'destination'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'proposed_date_out'); ?>
                     </td>
                     <td>
		    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $exeat,
			'attribute' => 'proposed_date_out',
			'value' => $exeat->proposed_date_out,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?>
		<?php echo $form->error($exeat,'proposed_date_out'); ?>
                     </td>
                 </tr>
    
		  <tr><td>
		<?php echo $form->labelEx($exeat,'proposed_date_in'); ?>
                     </td>
                     <td>
		    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $exeat,
			'attribute' => 'proposed_date_in',
			'value' => $exeat->proposed_date_in,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?>
		<?php echo $form->error($exeat,'proposed_date_in'); ?>
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


  </div>
  
</div>

<a class="btn btn-primary" data-toggle="modal" href="#addStudent" >Create Exeat Request</a>
<div class="addStudent">
</div>
<h3>My Exeat History</h3>

<?php 

$exeatdata=new CActiveDataProvider('Exeat');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'student-grid',
	'dataProvider' => $exeatdata,
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'columns' => array(
		 array(
            'class'=>'CLinkColumn',
            'header'=>'View',
            'label'=>'View',
           'urlExpression'=>'Yii::app()->request->baseUrl."/exeat/view/".$data->id',
            //'imageUrl'=> Yii::app()->createUrl("employee/details", array("id"=>$data->id)),
        ),
            
	
		'student0',
		'purpose',
		'destination',
		'proposed_date_out',
                 'proposed_date_in',
            'status0',
            //'entry_status',
		
		
	),
)); ?>


<?php } ?>
