<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('osi_menuitems_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->osiMenuitems)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('osi_roles_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->osiRoles)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created')); ?>:
	<?php echo GxHtml::encode($data->created); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('createdby')); ?>:
	<?php echo GxHtml::encode($data->createdby); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('modified')); ?>:
	<?php echo GxHtml::encode($data->modified); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('modifiedby')); ?>:
	<?php echo GxHtml::encode($data->modifiedby); ?>
	<br />
	*/ ?>

</div>