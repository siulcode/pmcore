<?php
/* @var $this CampaignController */
/* @var $model Campaign */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campaign-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'channeltype_id'); ?>
		<?php echo $form->textField($model,'channeltype_id'); ?>
		<?php echo $form->error($model,'channeltype_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'effdate'); ?>
		<?php echo $form->textField($model,'effdate'); ?>
		<?php echo $form->error($model,'effdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enddate'); ?>
		<?php echo $form->textField($model,'enddate'); ?>
		<?php echo $form->error($model,'enddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget'); ?>
		<?php echo $form->textField($model,'budget',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advertiser_id'); ?>
		<?php echo $form->textField($model,'advertiser_id'); ?>
		<?php echo $form->error($model,'advertiser_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'network_id'); ?>
		<?php echo $form->textField($model,'network_id'); ?>
		<?php echo $form->error($model,'network_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastmodified'); ?>
		<?php echo $form->textField($model,'lastmodified'); ?>
		<?php echo $form->error($model,'lastmodified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastmodifiedby'); ?>
		<?php echo $form->textField($model,'lastmodifiedby'); ?>
		<?php echo $form->error($model,'lastmodifiedby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->