<?php
/* @var $this AdvertiserController */
/* @var $model Advertiser */

$this->breadcrumbs=array(
	'Advertisers'=>array('index'),
	$model->name=>array('view','id'=>$model->advertiser_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Advertiser',   'url'=>array('index')),
	array('label'=>'Create Advertiser', 'url'=>array('create')),
	array('label'=>'View Advertiser',   'url'=>array('view', 'id'=>$model->advertiser_id)),
	array('label'=>'Manage Advertiser', 'url'=>array('admin')),
);
?>

<h1>Update Advertiser <?php echo $model->advertiser_id; ?></h1>
<?php echo $this->renderPartial('_form', array( 'model'         =>$model,
                                                'newkey'        =>$newkey, 
                                                'lastModified'  =>$lastModified)); ?>