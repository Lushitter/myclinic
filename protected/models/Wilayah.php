<?php
class Wilayah extends CActiveRecord {
    // Define the table name
    public function tableName() {
        return 'wilayah'; // Make sure this matches your database table name
    }

    // Define validation rules
    public function rules() {
        return array(
            array('name', 'required'), // 'name' is required
        );
    }

    // Define relations if any
    public function relations() {
        return array(
            // Define relations here if needed
        );
    }

    // Define attribute labels
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
        );
    }

    // Return the static model of the specified AR class
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
}