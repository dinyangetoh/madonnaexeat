<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php  echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('activkey')); ?>:
	<?php echo GxHtml::encode($data->activkey); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('userrole')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->userrole0)); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('create_at')); ?>:
	<?php echo GxHtml::encode($data->create_at); ?>
	<br />
	<?php /*
	<?php  echo GxHtml::encode($data->getAttributeLabel('lastvisit_at')); ?>:
	<?php echo GxHtml::encode($data->lastvisit_at); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('superuser')); ?>:
	<?php echo GxHtml::encode($data->superuser); ?>
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<br />
	<?php  echo GxHtml::encode($data->getAttributeLabel('modfiedby')); ?>:
	<?php echo GxHtml::encode($data->modfiedby); ?>
	<br />
	<br />
	*/ ?>

</div>