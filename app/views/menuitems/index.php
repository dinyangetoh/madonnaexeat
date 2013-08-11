<?php

$this->breadcrumbs = array(
	Menuitems::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Menuitems::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Menuitems::label(2), 'url' => array('admin')),
);
?>

<h3><?php echo GxHtml::encode(Menuitems::label(2)); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 