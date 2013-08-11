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
	$.fn.yiiGridView.update('state-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h3>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'state-grid',
	'dataProvider' => $model->search(),
	'type' =>TbHtml::GRID_TYPE_STRIPED,
	'filter' => $model,
	'columns' => array(
		'name',
		'code',
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>