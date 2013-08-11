<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php  echo GxHtml::encode($data->getAttributeLabel('student')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->student0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('purpose')); ?>:
	<?php echo GxHtml::encode($data->purpose); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('destination')); ?>:
	<?php echo GxHtml::encode($data->destination); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('proposed_date_out')); ?>:
	<?php echo GxHtml::encode($data->proposed_date_out); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('proposed_days')); ?>:
	<?php echo GxHtml::encode($data->proposed_days); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('proposed_date_in')); ?>:
	<?php echo GxHtml::encode($data->proposed_date_in); ?>
	<br />
	<?php /*
	<?php  echo GxHtml::encode($data->getAttributeLabel('approved_date_out')); ?>:
	<?php echo GxHtml::encode($data->approved_date_out); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('approved_days')); ?>:
	<?php echo GxHtml::encode($data->approved_days); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('expiring_date')); ?>:
	<?php echo GxHtml::encode($data->expiring_date); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('approved_remark')); ?>:
	<?php echo GxHtml::encode($data->approved_remark); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('sign_out_date')); ?>:
	<?php echo GxHtml::encode($data->sign_out_date); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('signed_out_by')); ?>:
	<?php echo GxHtml::encode($data->signed_out_by); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('expired')); ?>:
	<?php echo GxHtml::encode($data->expired); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('sign_in_remark')); ?>:
	<?php echo GxHtml::encode($data->sign_in_remark); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('signed_in_by')); ?>:
	<?php echo GxHtml::encode($data->signed_in_by); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->status0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('entry_status')); ?>:
	<?php echo GxHtml::encode($data->entry_status); ?>
	<br />
	*/ ?>

</div>