<?php
class Patient extends CActiveRecord {
    public function rules() {
        return array(
            array('name, address, phone', 'required'),
        );
    }
}