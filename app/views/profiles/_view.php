<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->user_id), array('view', 'id' => $data->user_id)); ?>
	<br />

	<?php  echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('surname')); ?>:
	<?php echo GxHtml::encode($data->surname); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('othernames')); ?>:
	<?php echo GxHtml::encode($data->othernames); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('occupation')); ?>:
	<?php echo GxHtml::encode($data->occupation); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('photo')); ?>:
	<?php echo GxHtml::encode($data->photo); ?>
	<br />
	<?php /*
	<?php  echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('phonenumbers')); ?>:
	<?php echo GxHtml::encode($data->phonenumbers); ?>
	<br />
	*/ ?>

</div>