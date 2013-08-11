<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php  echo GxHtml::encode($data->getAttributeLabel('session')); ?>:
	<?php echo GxHtml::encode($data->session); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('semester')); ?>:
	<?php echo GxHtml::encode($data->semester); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('semester_start_date')); ?>:
	<?php echo GxHtml::encode($data->semester_start_date); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('semester_end_date')); ?>:
	<?php echo GxHtml::encode($data->semester_end_date); ?>
	<br />

</div>