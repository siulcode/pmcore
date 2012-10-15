<?php
/**
 * This is the model class for table "pmcore.advertiser".
 *
 * The followings are the available columns in table 'pmcore.advertiser':
 * @property integer $advertiser_id
 * @property string $name
 * @property string $billing_address_1
 * @property string $billing_address_2
 * @property string $billing_state
 * @property string $billing_zip
 * @property string $default_currency
 * @property string $timezone
 * @property string $billing_country
 * @property integer $network_id
 * @property string $status
 * @property string $lastmodified
 *
 * The followings are the available model relations:
 * @property Network $network
 */
class Advertiser extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Advertiser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'pmcore.advertiser';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('advertiser_id, network_id', 'required'),
            array('advertiser_id, network_id', 'numerical', 'integerOnly'                => true),
            array('name, billing_zip, timezone, billing_country', 'length', 'max'        => 45),
            array('billing_address_1, billing_address_2, billing_state', 'length', 'max' => 100),
            array('default_currency', 'length', 'max'                                    => 3),
            array('status', 'length', 'max'                                              => 8),
            array('lastmodified', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('advertiser_id, name, billing_address_1, billing_address_2, billing_state, billing_zip, default_currency, timezone, billing_country, network_id, status, lastmodified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'network' => array(self::BELONGS_TO, 'Network', 'network_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'advertiser_id'     => 'Advertiser',
            'name'              => 'Name',
            'billing_address_1' => 'Billing Address 1',
            'billing_address_2' => 'Billing Address 2',
            'billing_state'     => 'Billing State',
            'billing_zip'       => 'Billing Zip',
            'default_currency'  => 'Default Currency',
            'timezone'          => 'Timezone',
            'billing_country'   => 'Billing Country',
            'network_id'        => 'Network',
            'status'            => 'Status',
            'lastmodified'      => 'Lastmodified',
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

        $criteria->compare('advertiser_id',     $this->advertiser_id);
        $criteria->compare('name',              $this->name, true);
        $criteria->compare('billing_address_1', $this->billing_address_1, true);
        $criteria->compare('billing_address_2', $this->billing_address_2, true);
        $criteria->compare('billing_state',     $this->billing_state, true);
        $criteria->compare('billing_zip',       $this->billing_zip, true);
        $criteria->compare('default_currency',  $this->default_currency, true);
        $criteria->compare('timezone',          $this->timezone, true);
        $criteria->compare('billing_country',   $this->billing_country, true);
        $criteria->compare('network_id',        $this->network_id);
        $criteria->compare('status',            $this->status, true);
        $criteria->compare('lastmodified',      $this->lastmodified, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }
}