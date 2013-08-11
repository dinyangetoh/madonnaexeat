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
'regno',
array(
			'name' => 'department0',
			'type' => 'raw',
			'value' => $model->department0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->department0)), array('department/view', 'id' => GxActiveRecord::extractPkValue($model->department0, true))) : null,
			),
array(
			'name' => 'level0',
			'type' => 'raw',
			'value' => $model->level0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->level0)), array('level/view', 'id' => GxActiveRecord::extractPkValue($model->level0, true))) : null,
			),
array(
			'name' => 'state0',
			'type' => 'raw',
			'value' => $model->state0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->state0)), array('state/view', 'id' => GxActiveRecord::extractPkValue($model->state0, true))) : null,
			),
'hometown',
array(
			'name' => 'profile0',
			'type' => 'raw',
			'value' => $model->profile0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->profile0)), array('profiles/view', 'id' => GxActiveRecord::extractPkValue($model->profile0, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('exeats')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->exeats as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('exeat/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>