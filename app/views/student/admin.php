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
	$.fn.yiiGridView.update('student-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h3>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'student-grid',
	'dataProvider' => $model->search(),
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'filter' => $model,
	'columns' => array(
		'regno',
		array(
				'name'=>'department',
				'value'=>'GxHtml::valueEx($data->department0)',
				'filter'=>GxHtml::listDataEx(Department::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'level',
				'value'=>'GxHtml::valueEx($data->level0)',
				'filter'=>GxHtml::listDataEx(Level::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'state',
				'value'=>'GxHtml::valueEx($data->state0)',
				'filter'=>GxHtml::listDataEx(State::model()->findAllAttributes(null, true)),
				),
		'hometown',
		/*
		array(
				'name'=>'profile',
				'value'=>'GxHtml::valueEx($data->profile0)',
				'filter'=>GxHtml::listDataEx(Profiles::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>