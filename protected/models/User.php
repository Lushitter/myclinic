<?php
class User extends CActiveRecord {
    public function rules() {
        return array(
            array('username, password', 'required'),
        );
    }
}