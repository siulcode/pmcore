<?php
/* @var $this AdvertiserController */
/* @var $model Advertiser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'advertiser-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'advertiser_id',array('readOnly'=>true, 'hidden'=>true, 'value'=>$newkey)); ?>
		<?php echo $form->error($model,'advertiser_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_1'); ?>
		<?php echo $form->textField($model,'billing_address_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billing_address_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address_2'); ?>
		<?php echo $form->textField($model,'billing_address_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billing_address_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_state'); ?>
		<?php echo $form->textField($model,'billing_state',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billing_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_zip'); ?>
		<?php echo $form->textField($model,'billing_zip',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'billing_zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_currency'); ?>
		<?php echo $form->textField($model,'default_currency',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'default_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timezone'); ?>
		<?php echo $form->textField($model,'timezone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'timezone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_country'); ?>
		<?php echo $form->textField($model,'billing_country',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'billing_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'network_id'); ?>
		<?php echo $form->textField($model,'network_id'); ?>
		<?php echo $form->error($model,'network_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastmodified'); ?>
		<?php echo $form->textField($model,'lastmodified',array('value'=> $lastModified)); ?>
		<?php echo $form->error($model,'lastmodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->