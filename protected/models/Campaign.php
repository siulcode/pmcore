<?php

/**
 * This is the model class for table "campaign".
 *
 * The followings are the available columns in table 'campaign':
 * @property integer $campaign_id
 * @property string $name
 * @property string $description
 * @property string $effective_date
 * @property string $end_date
 * @property integer $version
 * @property integer $advertiser_id
 * @property string $channel_type
 * @property string $active
 * @property string $last_modification
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Advertiser $advertiser
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
            array('name, effective_date, advertiser_id, active, user_id', 'required'),
            array('version, advertiser_id, user_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 40),
            array('description', 'length', 'max' => 100),
            array('channel_type', 'length', 'max' => 11),
            array('active', 'length', 'max' => 10),
            array('end_date, last_modification', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('campaign_id, name, description, effective_date, end_date, version, advertiser_id, channel_type, active, last_modification, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'advertiser' => array(self::BELONGS_TO, 'Advertiser', 'advertiser_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'campaign_id' => 'Campaign',
            'name' => 'Name',
            'description' => 'Description',
            'effective_date' => 'Effective Date',
            'end_date' => 'End Date',
            'version' => 'Version',
            'advertiser_id' => 'Advertiser',
            'channel_type' => 'Channel Type',
            'active' => 'Active',
            'last_modification' => 'Last Modification',
            'user_id' => 'User',
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
        $criteria->compare('effective_date', $this->effective_date, true);
        $criteria->compare('end_date', $this->end_date, true);
        $criteria->compare('version', $this->version);
        $criteria->compare('advertiser_id', $this->advertiser_id);
        $criteria->compare('channel_type', $this->channel_type, true);
        $criteria->compare('active', $this->active, true);
        $criteria->compare('last_modification', $this->last_modification, true);
        $criteria->compare('user_id', $this->user_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }
}