<?php

class User extends AppModel {
  public $validate = array(
    'username'=>array('rule'=>'notEmpty','message'=>'ユーザー名を入力してください。'),
    'password'=>array(array('rule'=>'notEmpty','message'=>'パスワードを入力してください。'),
                      array('rule'=>'confirm','message'=>'パスワードが一致していません。'))
    );


  public function confirm($check) {
    $this->log($this->data['User'],'debug');
    foreach ($check as $key=>$value) {
      if(!isset($this->data[$this->name][$key.'_confirm'])) {
        $this->log('koko','debug');
        return false;
      }
      if($value !== $this->data[$this->name][$key.'_confirm']) {
        $this->log('koko2','debug');
        return false;
      }
    }
    $this->log('koko3','debug');
    return true;
  }
}