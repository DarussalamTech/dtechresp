<?php

/**
 * This is the model class for table "contact_feedback".
 *
 * The followings are the available columns in table 'contact_feedback':
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property integer $email_sent
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 * @property string $activity_log
 */
class ContactFeedback extends DTActiveRecord {

    public $verifyCode ,$created_date,$create_time_stamp;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ContactFeedback the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'contact_feedback';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, email, create_time, create_user_id, update_time, update_user_id', 'required'),
            array('email_sent', 'numerical', 'integerOnly' => true),
            array("email", "email"),
            array('name, email, subject', 'length', 'max' => 150),
            array('create_user_id, update_user_id', 'length', 'max' => 11),
            array('body, activity_log,created_date,create_time_stamp', 'safe'),
            //array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, email, subject, body, email_sent, create_time, create_user_id, update_time, update_user_id, activity_log', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'verifyCode' => 'Verification Code',
            'email_sent' => 'Email Sent',
            'created_date' => 'Created Date',
            'create_time_stamp' => 'Time',
            'create_time' => 'Create Date',
            'create_user_id' => 'Create User',
            'update_time' => 'Update Time',
            'update_user_id' => 'Update User',
            'activity_log' => 'Activity Log',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('body', $this->body, true);
        $criteria->compare('email_sent', $this->email_sent);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);
        $criteria->compare('activity_log', $this->activity_log, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'id DESC'
            ),
            'pagination' => array(
                'pageSize' => 40,
            ),
        ));
    }
    /**
     * set for created date and time
     * @return type
     */
    public function afterFind() {
        $date_array = explode(" ",$this->create_time);
        $this->created_date = $date_array[0];
        $this->create_time_stamp = $date_array[1];
        return parent::afterFind();
    }

}