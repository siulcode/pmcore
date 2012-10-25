<?php
/* @var $this AdvertiserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Advertisers',
);

$this->menu=array(
	array('label'=>'Create Advertiser', 'url'=>array('create')),
	array('label'=>'Manage Advertiser', 'url'=>array('admin')),
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
<h1>Advertisers</h1>

<div class="span-7">
<?php 
echo CHtml::ajaxButton ("Update data",
                        CController::createUrl('Advertiser/showCampaignColumn'), 
                        array('update' => '#campaign-wrapper'));

$this->widget('zii.widgets.CListView', array(
    'dataProvider'  =>$AdvertiserDataColumn,
    'itemView'      =>'_viewadvcolumn',
));
?>
</div>
<div id="campaign-wrapper" class="span-7">
<?php
$this->renderPartial('_loadCampColumn', array('myValue' => $myValue));
?>
</div>