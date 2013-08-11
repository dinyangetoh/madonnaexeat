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
	$.fn.yiiGridView.update('menuusers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'menuusers-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'name',
		array(
				'name'=>'osi_menuitems_id',
				'value'=>'GxHtml::valueEx($data->osiMenuitems)',
				'filter'=>GxHtml::listDataEx(Menuitems::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'osi_roles_id',
				'value'=>'GxHtml::valueEx($data->osiRoles)',
				'filter'=>GxHtml::listDataEx(Userroles::model()->findAllAttributes(null, true)),
				),
		'created',
		'createdby',
		/*
		'modified',
		'modifiedby',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>