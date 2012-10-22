<?php
/* @var $this CampaignController */
/* @var $model Campaign */

$this->breadcrumbs=array(
	'Campaigns'=>array('index'),
	$model->name=>array('view','id'=>$model->campaign_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Campaign', 'url'=>array('index')),
	array('label'=>'Create Campaign', 'url'=>array('create')),
	array('label'=>'View Campaign', 'url'=>array('view', 'id'=>$model->campaign_id)),
	array('label'=>'Manage Campaign', 'url'=>array('admin')),
);
?>

<h1>Update Campaign <?php echo $model->campaign_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>