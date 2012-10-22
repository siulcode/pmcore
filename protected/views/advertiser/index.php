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
?>
<h1>Advertisers</h1>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'  => $dataProvider,
    'ajaxUrl'       => 'Yii::app()->createUrl("/Campaign/byadvertiser", array("id"=>$data["advertiser_id"]))',
    'columns'       => array(
        'advertiser_id',
        'name',
        'billing_address_1',
        'status',
        array(
            'class' => 'CButtonColumn',
            'viewButtonUrl' => 'Yii::app()->createUrl("/Campaign/byadvertiser", array("id"=>$data["advertiser_id"]))'
        ),
        
    ),
));


$this->widget('zii.widgets.grid.CGridView', array(
    "dataProvider" => $dataProvider,
    "selectableRows" => 1,
    'ajaxUpdate' => true,
    'columns' => array(
        'question' =>
        array(
            'type' => 'html',
            'value' => 'CHtml::ajaxLink(
                    CHtml::Encode($data->question),
                    Yii::app()->createUrl("campaign/byadvertiser"),
                    array( // ajaxOptions
                        "type" => "POST",
                        "beforeSend" => "function( request )
                                {
                        // Set up any pre-sending stuff like initializing progress indicators
                                        }",
                        "success" => "function( data )
                                {
                                    // handle return data
                                    alert( data );
                                }",
                "data" => array( "val1" => "1", "val2" => "2" )
                        ),

                    array( //htmlOptions
                    "href" => Yii::app()->createUrl("graph/ajaxRequest" ),

                    )

            )',
        )
    )
));
?>
