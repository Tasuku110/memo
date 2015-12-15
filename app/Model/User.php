<?php

class User extends AppModel {
  public $validate = array(
     'username'=>array('rule'=>'notEmpty','message'=>'ユーザー名を入力してください。'),
     'password'=>array('rule'=>'notEmpty','message'=>'パスワードを入力してください。'),
     'password_confirm'=>array('rule'=>'notEmpty','message'=>'パスワード(確認)を入力してください。')
     // 'password_confirm'=>(array(array('rule'=>'notEmpty', 'message'=>'パスワード(確認)を入力してください。'),
                                // array('rule'=>'passwordConfirm', 'message'=>'パスワードが一致していません。')))
    );

  public function passwordConfirm($check) {

    // 2つのパスワードフィールドが一致することを確認する。
    if($check['password_confirm'] === $this->data['User']['password']) {
      return true;
    } else {
      return false;
    }
  }
}