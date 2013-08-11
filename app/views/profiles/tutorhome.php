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

<h3><?php echo $model->user->userrole0; ?> | <?php $profilename=$model->othernames." ".$model->surname; echo $profilename; ?>'s Profile</h3>

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
	    $('.upload').fadeToggle(600);
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
	<tr class="odd">
		<th>Username</td>
		<td><?php echo $model->user->username; ?></td>
		<td>


		</td>
	</tr>

</table>

<h3>Pending Exeat History</h3>


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

