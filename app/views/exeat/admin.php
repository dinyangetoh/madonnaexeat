<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('exeat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h3>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'exeat-grid',
	'dataProvider' => $model->search(),
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'filter' => $model,
	'columns' => array(
		array(
				'name'=>'student',
				'value'=>'GxHtml::valueEx($data->student0)',
				'filter'=>GxHtml::listDataEx(Student::model()->findAllAttributes(null, true)),
				),
		'purpose',
		'destination',
		'proposed_date_out',
		'proposed_days',
		/*
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
				'name'=>'status',
				'value'=>'GxHtml::valueEx($data->status0)',
				'filter'=>GxHtml::listDataEx(Status::model()->findAllAttributes(null, true)),
				),
		'entry_status',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>