<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h3>Student Profile | Please update details</h3>

<?php
$this->renderPartial('_uform', array(
		'model' => $model,
		'buttons' => 'create'));
?>