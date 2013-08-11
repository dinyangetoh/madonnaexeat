<?php

$this->breadcrumbs = array(
	Userroles::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Userroles::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Userroles::label(2), 'url' => array('admin')),
);
?>

<h3><?php echo GxHtml::encode(Userroles::label(2)); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 