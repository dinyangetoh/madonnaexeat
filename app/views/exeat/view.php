<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h3><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
array(
			'name' => 'student0',
			'type' => 'raw',
			'value' => $model->student0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->student0)), array('student/view', 'id' => GxActiveRecord::extractPkValue($model->student0, true))) : null,
			),
'purpose',
'destination',
'proposed_date_out',
'proposed_days',
'proposed_date_in',
'approved_date_out',
'approved_days',
'expiring_date',
'approved_remark',
'sign_out_date',
'signed_out_by',
'expired',
'sign_in_remark',
'signed_in_by',
array(
			'name' => 'status0',
			'type' => 'raw',
			'value' => $model->status0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->status0)), array('status/view', 'id' => GxActiveRecord::extractPkValue($model->status0, true))) : null,
			),
'entry_status',
	),
)); ?>

