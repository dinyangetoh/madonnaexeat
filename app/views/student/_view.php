<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php  echo GxHtml::encode($data->getAttributeLabel('regno')); ?>:
	<?php echo GxHtml::encode($data->regno); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('department')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->department0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('level')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->level0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('state')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->state0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('hometown')); ?>:
	<?php echo GxHtml::encode($data->hometown); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('profile')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->profile0)); ?>
	<br />

</div>