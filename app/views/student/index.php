<?php

$this->breadcrumbs = array(
	Student::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Student::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Student::label(2), 'url' => array('admin')),
);
?>

<h3><?php echo GxHtml::encode(Student::label(2)); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 