<?php
/* @var $this CampaignController */
/* @var $model Campaign */

$this->breadcrumbs=array(
	'Campaigns'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Campaign', 'url'=>array('index')),
	array('label'=>'Create Campaign', 'url'=>array('create')),
	array('label'=>'Update Campaign', 'url'=>array('update', 'id'=>$model->campaign_id)),
	array('label'=>'Delete Campaign', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->campaign_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Campaign', 'url'=>array('admin')),
);
?>

<h1>View Campaign #<?php echo $model->campaign_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'campaign_id',
		'name',
		'description',
		'channeltype_id',
		'version',
		'effdate',
		'enddate',
		'active',
		'budget',
		'advertiser_id',
		'network_id',
		'lastmodified',
		'lastmodifiedby',
	),
)); ?>
