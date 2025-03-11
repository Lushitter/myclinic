<?php
class Pegawai extends CActiveRecord {
    public function tableName() {
        return 'pegawai';
    }

    public function rules() {
        return array(
            array('name, position', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
        );
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
}