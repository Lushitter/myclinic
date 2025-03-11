<?php
class Payment extends CActiveRecord {
    public function rules() {
        return array(
            array('patient_id, amount', 'required'),
        );
    }
}