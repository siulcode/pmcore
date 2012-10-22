<?php
/* @var $this CampaignController */
/* @var $model Campaign */

$this->breadcrumbs=array(
	'Campaigns'=>array('index'),
);


foreach ($results as $value) {
    echo $value->name . '<br />';
}