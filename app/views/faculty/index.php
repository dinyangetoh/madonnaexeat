<?php

$this->breadcrumbs = array(
	Faculty::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Faculty::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Faculty::label(2), 'url' => array('admin')),
);
?>

<h3><?php echo GxHtml::encode(Faculty::label(2)); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 