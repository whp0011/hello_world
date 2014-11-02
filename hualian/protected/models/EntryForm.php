<?php
/**
 * 项目:php
 * 文件：EntryForm.php
 * User: Administrator whp0011@163.com
 * Date: 14-10-19 上午10:26
 */
class EntryForm extends CFormModel{

    public $username;
    public $passwd;
    public $rememberMe = false;

    public function rules(){
        return array(
            array('username','passwd','required'),
            array('remembeMe','boolean'),
            array('passwd','authenticate'),

        );
    }
} 