

<h3>Student Exeat Details | <?php echo $model->student0->profile0->user; ?></h3>

<table class="table table-striped">
	<tr class="even">
		<th>Student</th> 
		<td>
                    
                   
                    <?php echo $model->student0->profile0->user; ?></td>
		<td rowspan="4" height="120" width="140">
			<?php if(empty($model->student0->profile0->photo)){ 
				?>

			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/no_photo.jpg" class="thumbnail" ?>
			


			<?php }else{

			 ?>
			 <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/users/<?php echo $model->student0->profile0->photo; ?>" class="thumbnail" ?>

                        <?php } ?>
		</td>
	</tr>
	<tr class="odd">
		<th>Purpose of Request</th>
		<td><?php echo $model->purpose; ?></td>
	</tr>
	<tr class="even">
		<th>Destination</th>
		<td><?php echo $model->destination; ?></td>
	</tr>
	

	<tr class="even">
		<th>Proposed Date Out</td>
		<td><?php echo $model->proposed_date_out; ?></td>
		
	</tr>
	<tr class="odd">
		<th>Proposed Date In</td>
		<td><?php echo $model->proposed_date_in; ?></td>
		<td></td>
	</tr>
        <tr class="odd">
		<th>Request Status</td>
		<td><?php echo $model->status0; 
                
                if($model->status==2){ echo " (".$model->approvedby.")"; }
                
                ?></td>
		<td></td>
	</tr>
	
        
        <?php  $student=Student::model()->findByPk($model->student);
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


  <div class="form">

    <fieldset>
     
<?php if($model->status!=1){

$exeat=$model = $this->loadModel($model->id, 'Exeat');
$form = $this->beginWidget('GxActiveForm', array(
	'id' => 'exeat-form',
	'enableAjaxValidation' => true,
    'action'=>$this->createurl('/exeat/update/'.$model->id),
));



?>

	

	<?php echo $form->errorSummary($exeat); ?>
<table cellspacing="3">
   
    
        
         <tr><td>
		<?php echo $form->labelEx($exeat,'approved_date_out'); ?>
                     </td>
                     <td>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $exeat,
			'attribute' => 'approved_date_out',
			'value' => $exeat->approved_date_out,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?>
		<?php echo $form->error($exeat,'approved_date_out'); ?>
                     </td>
                 </tr>
    
		
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'expiring_date'); ?>
                     </td>
                     <td>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $exeat,
			'attribute' => 'expiring_date',
			'value' => $exeat->expiring_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?>
		<?php echo $form->error($exeat,'expiring_date'); ?>
                     </td>
                 </tr>
    
		 <tr><td>
		<?php echo $form->labelEx($exeat,'approved_remark'); ?>
                     </td>
                     <td>
                           <?php echo $form->hiddenField($exeat, 'approvedby', array('value' =>Yii::app()->user->profilename)); ?>
		<?php echo $form->textArea($exeat, 'approved_remark', array('maxlength' => 45)); ?>
		<?php echo $form->error($exeat,'approved_remark'); ?>
                     </td>
                 </tr>
                 
                  <tr><td>
		<?php echo $form->labelEx($exeat,'status'); ?>
                     </td>
                     <td>
		<?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
					'asDropDownList' => true,
					'model'=>$exeat,
					'attribute' =>'status',
                                        'name' => 'Exeat[status]',
                                        'value'=>$exeat->status,
					'data'=>GxHtml::listDataEx(Status::model()->findAll(array("condition"=>"access_level =1","order"=>"id"))),

					'pluginOptions' => array(
					   
					    'placeholder' =>'Select Status',
					    'width'=>'100%',
                         'allowClear'=>true,
					    
					),
					                   'htmlOptions' => array(
                                        'prompt'=>'',
                                   ),
)); ?>
		<?php echo $form->error($exeat,'status'); ?>
                     </td>
                 </tr>

                 
                 <tr><td></td>
                     <td>
<br>
 

<?php
echo GxHtml::submitButton(Yii::t('app', 'Update'),array('class'=>'btn btn-success '));
$this->endWidget();
}
?>
                     </td>
                 </tr>
</table>

    </fieldset>
</div><!-- form -->
