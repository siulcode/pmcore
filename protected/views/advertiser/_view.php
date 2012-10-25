<?php
/* @var $this AdvertiserController */
/* @var $data Advertiser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('advertiser_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->advertiser_id), array('view', 'id'=>$data->advertiser_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_1')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_2')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_state')); ?>:</b>
	<?php echo CHtml::encode($data->billing_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_zip')); ?>:</b>
	<?php echo CHtml::encode($data->billing_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_currency')); ?>:</b>
	<?php echo CHtml::encode($data->default_currency); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('timezone')); ?>:</b>
	<?php echo CHtml::encode($data->timezone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_country')); ?>:</b>
	<?php echo CHtml::encode($data->billing_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('network_id')); ?>:</b>
	<?php echo CHtml::encode($data->network_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastmodified')); ?>:</b>
	<?php echo CHtml::encode($data->lastmodified); ?>
	<br />

	*/ ?>

</div>