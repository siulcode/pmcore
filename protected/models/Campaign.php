<?php

/**
 * This is the model class for table "campaign".
 *
 * The followings are the available columns in table 'campaign':
 * @property integer $campaign_id
 * @property string $name
 * @property string $description
 * @property integer $channeltype_id
 * @property integer $version
 * @property string $effdate
 * @property string $enddate
 * @property integer $active
 * @property string $budget
 * @property integer $advertiser_id
 * @property integer $network_id
 * @property string $lastmodified
 * @property integer $lastmodifiedby
 *
 * The followings are the available model relations:
 * @property Channeltype $channeltype
 * @property Advertiser $advertiser
 * @property Network $network
 * @property User $lastmodifiedby0
 */
class Campaign extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Campaign the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'campaign';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('channeltype_id, advertiser_id, network_id, lastmodifiedby', 'required'),
            array('channeltype_id, version, active, advertiser_id, network_id, lastmodifiedby', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 45),
            array('description', 'length', 'max' => 200),
            array('budget', 'length', 'max' => 7),
            array('effdate, enddate, lastmodified', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('campaign_id, name, description, channeltype_id, version, effdate, enddate, active, budget, advertiser_id, network_id, lastmodified, lastmodifiedby', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'channeltype'       => array(self::BELONGS_TO, 'Channeltype', 'channeltype_id'),
            'advertiser'        => array(self::BELONGS_TO, 'Advertiser', 'advertiser_id'),
            'network'           => array(self::BELONGS_TO, 'Network', 'network_id'),
            'lastmodifiedby0'   => array(self::BELONGS_TO, 'User', 'lastmodifiedby'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'campaign_id'    => 'Campaign',
            'name'           => 'Name',
            'description'    => 'Description',
            'channeltype_id' => 'Channeltype',
            'version'        => 'Version',
            'effdate'        => 'Effdate',
            'enddate'        => 'Enddate',
            'active'         => 'Active',
            'budget'         => 'Budget',
            'advertiser_id'  => 'Advertiser',
            'network_id'     => 'Network',
            'lastmodified'   => 'Lastmodified',
            'lastmodifiedby' => 'Lastmodifiedby',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('campaign_id', $this->campaign_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('channeltype_id', $this->channeltype_id);
        $criteria->compare('version', $this->version);
        $criteria->compare('effdate', $this->effdate, true);
        $criteria->compare('enddate', $this->enddate, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('budget', $this->budget, true);
        $criteria->compare('advertiser_id', $this->advertiser_id);
        $criteria->compare('network_id', $this->network_id);
        $criteria->compare('lastmodified', $this->lastmodified, true);
        $criteria->compare('lastmodifiedby', $this->lastmodifiedby);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}