<?php
/* @var $this AdvertisersController */

$this->breadcrumbs=array(
	'Advertisers'=>array('/advertisers'),
	'Showall',
);
foreach ($allrecords as $value) {
    $columns[] = array($value->advertiser_id, $value->name, $value->billing_address_1, $value->network_id, $value->status);
}

$header = array('ID','NAME', 'ADDRESS', 'NETWORK', 'STATUS');

$this->widget('ext.htmlTableUi.htmlTableUi',array(
    'ajaxUrl'=>'site/handleHtmlTable',
    'arProvider'=>'',    
    'collapsed'=>false,
    'columns'=>$header,
    'cssFile'=>'',
    'editable'=>true,
    'enableSort'=>true,
    'extra'=>'Additional Information',
    'footer'=>'Click upper right corner to edit',
    'formTitle'=>'Advertiser',
    'rows'=>$columns,
    'sortColumn'=>1,
    'sortOrder'=>'desc',
    'title'=>'All Advertisers',
));
?>
