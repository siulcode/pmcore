<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('campaign_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->campaign_id), array('view', 'id'=>$data->campaign_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('channeltype_id')); ?>:</b>
	<?php echo CHtml::encode($data->channeltype_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effdate')); ?>:</b>
	<?php echo CHtml::encode($data->effdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enddate')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget')); ?>:</b>
	<?php echo CHtml::encode($data->budget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('advertiser_id')); ?>:</b>
	<?php echo CHtml::encode($data->advertiser_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('network_id')); ?>:</b>
	<?php echo CHtml::encode($data->network_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastmodified')); ?>:</b>
	<?php echo CHtml::encode($data->lastmodified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastmodifiedby')); ?>:</b>
	<?php echo CHtml::encode($data->lastmodifiedby); ?>
	<br />

	*/ ?>

</div>