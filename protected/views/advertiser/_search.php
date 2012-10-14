<?php
/* @var $this AdvertiserController */
/* @var $model Advertiser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'advertiser_id'); ?>
		<?php echo $form->textField($model,'advertiser_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_address_1'); ?>
		<?php echo $form->textField($model,'billing_address_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_address_2'); ?>
		<?php echo $form->textField($model,'billing_address_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_state'); ?>
		<?php echo $form->textField($model,'billing_state',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_zip'); ?>
		<?php echo $form->textField($model,'billing_zip',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_currency'); ?>
		<?php echo $form->textField($model,'default_currency',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timezone'); ?>
		<?php echo $form->textField($model,'timezone',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_country'); ?>
		<?php echo $form->textField($model,'billing_country',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'network_id'); ?>
		<?php echo $form->textField($model,'network_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastmodified'); ?>
		<?php echo $form->textField($model,'lastmodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->