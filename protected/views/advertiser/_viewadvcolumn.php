<?php
/* @var $this AdvertiserController */
/* @var $data Advertiser */
?>

<div class="view">
    <a href="<?=Yii::app()->createUrl('advertiser/showCampaignColumn', array('advertiserid' => $data->advertiser_id))?>">
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address_1')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address_1 . ' ' . $data->billing_address_2); ?>
	<br />
    </a>
</div>