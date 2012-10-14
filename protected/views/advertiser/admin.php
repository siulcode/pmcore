<?php
/* @var $this AdvertiserController */
/* @var $model Advertiser */

$this->breadcrumbs=array(
	'Advertisers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Advertiser', 'url'=>array('index')),
	array('label'=>'Create Advertiser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('advertiser-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Advertisers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'advertiser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'advertiser_id',
		'name',
		'billing_address_1',
		'billing_address_2',
		'billing_state',
		'billing_zip',
		/*
		'default_currency',
		'timezone',
		'billing_country',
		'network_id',
		'status',
		'lastmodified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
