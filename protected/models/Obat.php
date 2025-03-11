<?php
class Obat extends CActiveRecord {
    public function tableName() {
        return 'obat';
    }

    public function rules() {
        return array(
            array('name, dosage', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'dosage' => 'Dosage',
        );
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
}