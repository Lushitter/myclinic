<?php
class Tindakan extends CActiveRecord {
    public function tableName() {
        return 'tindakan';
    }

    public function rules() {
        return array(
            array('description', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'description' => 'Description',
        );
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
}